<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use RuntimeException;

class QuranApiClient
{
    public function fetchSurahList(): array
    {
        $data = $this->request('/surat');

        return array_map(
            fn (array $rawSurah): array => $this->normalizeSurah($rawSurah),
            $data
        );
    }

    public function fetchSurahDetail(int $surahNumber): array
    {
        $data = $this->request("/surat/{$surahNumber}");
        $surah = $this->normalizeSurah($data);
        $rawAyahs = $data['ayat'] ?? [];

        $ayahs = array_map(
            fn (array $rawAyah): array => $this->normalizeAyah($surah['id'], $rawAyah),
            $rawAyahs
        );

        return [
            'surah' => $surah,
            'ayahs' => $ayahs,
        ];
    }

    private function request(string $endpoint): array
    {
        $baseUrl = rtrim((string) config('quran.base_url'), '/');
        $timeout = (int) config('quran.timeout_seconds', 30);
        $retryTimes = (int) config('quran.retry_times', 3);
        $retrySleep = (int) config('quran.retry_sleep_ms', 500);

        $response = Http::baseUrl($baseUrl)
            ->acceptJson()
            ->timeout($timeout)
            ->retry($retryTimes, $retrySleep)
            ->get($endpoint)
            ->throw();

        $payload = $response->json();

        if (! is_array($payload) || ! isset($payload['data']) || ! is_array($payload['data'])) {
            throw new RuntimeException("Respons API tidak valid untuk endpoint: {$endpoint}");
        }

        return $payload['data'];
    }

    private function normalizeSurah(array $rawSurah): array
    {
        $qariId = (string) config('quran.qari_id', '05');

        return [
            'id' => (int) $rawSurah['nomor'],
            'nama_arab' => trim((string) $rawSurah['nama']),
            'nama_latin' => trim((string) $rawSurah['namaLatin']),
            'arti' => trim((string) $rawSurah['arti']),
            'jumlah_ayat' => (int) $rawSurah['jumlahAyat'],
            'tempat_turun' => strtolower(trim((string) $rawSurah['tempatTurun'])),
            'deskripsi' => isset($rawSurah['deskripsi']) ? trim((string) $rawSurah['deskripsi']) : null,
            'audio_url' => $rawSurah['audioFull'][$qariId] ?? null,
        ];
    }

    private function normalizeAyah(int $surahId, array $rawAyah): array
    {
        $qariId = (string) config('quran.qari_id', '05');
        $nomorAyat = (int) $rawAyah['nomorAyat'];
        $juz = isset($rawAyah['juz'])
            ? (int) $rawAyah['juz']
            : $this->resolveJuz($surahId, $nomorAyat);

        return [
            'surah_id' => $surahId,
            'nomor_ayat' => $nomorAyat,
            'teks_arab' => trim((string) $rawAyah['teksArab']),
            'teks_latin' => trim((string) $rawAyah['teksLatin']),
            'terjemahan' => trim((string) $rawAyah['teksIndonesia']),
            'juz' => $juz,
            'halaman' => isset($rawAyah['halaman']) ? (int) $rawAyah['halaman'] : null,
            'audio_url' => $rawAyah['audio'][$qariId] ?? null,
        ];
    }

    public function resolveJuz(int $surahId, int $nomorAyat): int
    {
        $juzStarts = (array) config('quran.juz_starts', []);
        $resolvedJuz = 1;

        foreach ($juzStarts as $juz => $position) {
            $startSurah = (int) $position['surah_id'];
            $startAyah = (int) $position['nomor_ayat'];

            if ($surahId > $startSurah || ($surahId === $startSurah && $nomorAyat >= $startAyah)) {
                $resolvedJuz = (int) $juz;
            }
        }

        return $resolvedJuz;
    }
}

