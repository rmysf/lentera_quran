<?php

namespace App\Console\Commands;

use App\Models\Ayah;
use App\Models\Bookmark;
use App\Models\Surah;
use App\Services\QuranApiClient;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Throwable;

class ImportQuran extends Command
{
    protected $signature = 'quran:import
        {--fresh : Kosongkan tabel surahs, ayahs, serta bookmark terkait sebelum impor ulang}
        {--delay= : Jeda antar request dalam milidetik}
        {--force : Jalankan tanpa konfirmasi interaktif}';

    protected $description = 'Impor data surah dan ayat Al-Qur\'an dari API EQuran.id ke database lokal';

    public function handle(QuranApiClient $apiClient): int
    {
        if ($this->option('fresh') && ! $this->handleFreshOption()) {
            $this->info('Proses impor dibatalkan.');

            return self::SUCCESS;
        }

        try {
            $this->info('Mengambil daftar surah dari API EQuran.id...');
            $surahList = $apiClient->fetchSurahList();
            $this->importAllSurahs($apiClient, $surahList);
        } catch (Throwable $exception) {
            $this->newLine();
            $this->error('Gagal mengambil atau menyimpan data dari API: '.$exception->getMessage());

            return self::FAILURE;
        }

        $validationErrors = $this->validateImportedData();

        if ($validationErrors !== []) {
            foreach ($validationErrors as $errorMessage) {
                $this->error($errorMessage);
            }

            return self::FAILURE;
        }

        $this->info(sprintf(
            'Impor berhasil dan tervalidasi: %d surah, %d ayat.',
            Surah::count(),
            Ayah::count()
        ));

        return self::SUCCESS;
    }

    private function handleFreshOption(): bool
    {
        $confirmationMessage = "Opsi --fresh akan menghapus seluruh data surahs, ayahs, serta bookmarks bertipe 'surah' dan 'ayah'. Lanjutkan?";

        if (! $this->option('force') && ! $this->confirm($confirmationMessage)) {
            return false;
        }

        DB::transaction(function (): void {
            // Gunakan delete (bukan truncate) karena tabel direferensikan oleh foreign key
            Bookmark::whereIn('bookmarkable_type', ['surah', 'ayah'])->delete();
            Ayah::query()->delete();
            Surah::query()->delete();
        });

        $this->info("Data surahs, ayahs, serta bookmarks bertipe 'surah' dan 'ayah' berhasil dikosongkan.");

        return true;
    }

    private function importAllSurahs(QuranApiClient $apiClient, array $surahList): void
    {
        $delayMs = $this->resolveDelayMilliseconds();
        $total = count($surahList);
        $progressBar = $this->output->createProgressBar($total);
        $progressBar->start();

        foreach ($surahList as $index => $surahSummary) {
            $detail = $apiClient->fetchSurahDetail((int) $surahSummary['id']);
            $this->persistSurahWithAyahs($detail['surah'], $detail['ayahs']);
            $progressBar->advance();

            if ($delayMs > 0 && $index < $total - 1) {
                usleep($delayMs * 1000);
            }
        }

        $progressBar->finish();
        $this->newLine();
    }

    private function resolveDelayMilliseconds(): int
    {
        $delayOption = $this->option('delay');

        if ($delayOption !== null && $delayOption !== '') {
            return max(0, (int) $delayOption);
        }

        return max(0, (int) config('quran.request_delay_ms', 150));
    }

    private function persistSurahWithAyahs(array $surahData, array $ayahsData): void
    {
        DB::transaction(function () use ($surahData, $ayahsData): void {
            Surah::upsert(
                [$surahData],
                ['id'],
                ['nama_arab', 'nama_latin', 'arti', 'jumlah_ayat', 'tempat_turun', 'deskripsi', 'audio_url', 'updated_at']
            );

            if ($ayahsData !== []) {
                Ayah::upsert(
                    $ayahsData,
                    ['surah_id', 'nomor_ayat'],
                    ['teks_arab', 'teks_latin', 'terjemahan', 'juz', 'halaman', 'audio_url', 'updated_at']
                );
            }
        });
    }

    private function validateImportedData(): array
    {
        $errors = [];

        $this->validateSurahCount($errors);
        $this->validateAyahCountPerSurah($errors);
        $this->validateTotalAyahCount($errors);
        $this->validateNonEmptyAyahTexts($errors);
        $this->validateJuzDistribution($errors);

        return $errors;
    }

    private function validateSurahCount(array &$errors): void
    {
        $expectedSurahCount = (int) config('quran.validation.expected_surah_count', 114);
        $actualSurahCount = Surah::count();

        if ($actualSurahCount !== $expectedSurahCount) {
            $errors[] = "Validasi gagal: jumlah surah di database ({$actualSurahCount}) tidak sesuai target ({$expectedSurahCount}).";
        }
    }

    private function validateAyahCountPerSurah(array &$errors): void
    {
        $surahs = Surah::withCount('ayahs')->orderBy('id')->get();

        foreach ($surahs as $surah) {
            if ($surah->ayahs_count !== $surah->jumlah_ayat) {
                $errors[] = "Validasi gagal: surah {$surah->id} ({$surah->nama_latin}) memiliki {$surah->ayahs_count} baris ayat, seharusnya {$surah->jumlah_ayat}.";
            }
        }
    }

    private function validateTotalAyahCount(array &$errors): void
    {
        $expectedAyahCount = (int) config('quran.validation.expected_ayah_count', 6236);
        $actualAyahCount = Ayah::count();

        if ($actualAyahCount !== $expectedAyahCount) {
            $errors[] = "Validasi gagal: total ayat di database ({$actualAyahCount}) tidak sesuai target ({$expectedAyahCount}).";
        }
    }

    private function validateNonEmptyAyahTexts(array &$errors): void
    {
        $emptyTextCount = Ayah::query()
            ->whereRaw("TRIM(teks_arab) = ''")
            ->orWhereRaw("TRIM(teks_latin) = ''")
            ->orWhereRaw("TRIM(terjemahan) = ''")
            ->count();

        if ($emptyTextCount > 0) {
            $errors[] = "Validasi gagal: terdapat {$emptyTextCount} ayat dengan teks_arab, teks_latin, atau terjemahan yang kosong.";
        }
    }

    private function validateJuzDistribution(array &$errors): void
    {
        $invalidJuzCount = Ayah::query()
            ->where('juz', '<', 1)
            ->orWhere('juz', '>', 30)
            ->count();

        if ($invalidJuzCount > 0) {
            $errors[] = "Validasi gagal: terdapat {$invalidJuzCount} ayat dengan nomor juz di luar rentang 1..30.";
        }

        $expectedJuzCount = (int) config('quran.validation.expected_juz_count', 30);
        $presentJuzNumbers = Ayah::query()
            ->select('juz')
            ->distinct()
            ->orderBy('juz')
            ->pluck('juz')
            ->map(fn ($value): int => (int) $value)
            ->all();

        if ($expectedJuzCount === 30) {
            $missingJuz = array_diff(range(1, 30), $presentJuzNumbers);
            if ($missingJuz !== []) {
                $errors[] = 'Validasi gagal: juz berikut tidak memiliki ayat: '.implode(', ', $missingJuz).'.';
            }
        } elseif (count($presentJuzNumbers) !== $expectedJuzCount) {
            $errors[] = sprintf(
                'Validasi gagal: jumlah juz yang terisi (%d) tidak sesuai target (%d).',
                count($presentJuzNumbers),
                $expectedJuzCount
            );
        }
    }
}

