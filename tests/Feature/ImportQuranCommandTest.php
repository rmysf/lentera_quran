<?php

namespace Tests\Feature;

use App\Models\Ayah;
use App\Models\Bookmark;
use App\Models\Doa;
use App\Models\DoaCategory;
use App\Models\Surah;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ImportQuranCommandTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Http::preventStrayRequests();

        config([
            'quran.base_url' => 'https://equran.id/api/v2',
            'quran.request_delay_ms' => 0,
            'quran.qari_id' => '05',
            'quran.validation.expected_surah_count' => 2,
            'quran.validation.expected_ayah_count' => 4,
            'quran.validation.expected_juz_count' => 2,
        ]);
    }

    public function test_import_command_succeeds_and_stores_surahs_and_ayahs(): void
    {
        $this->fakeTwoSurahsApi();

        $this->artisan('quran:import', ['--delay' => 0])
            ->assertExitCode(0);

        $this->assertDatabaseCount('surahs', 2);
        $this->assertDatabaseCount('ayahs', 4);

        $alFatihah = Surah::findOrFail(1);
        $this->assertSame('Al-Fatihah', $alFatihah->nama_latin);
        $this->assertSame('mekah', $alFatihah->tempat_turun);
        $this->assertSame('https://cdn.equran.id/audio-full/Misyari-Rasyid-Al-Afasi/001.mp3', $alFatihah->audio_url);

        $firstAyah = Ayah::where('surah_id', 1)->where('nomor_ayat', 1)->firstOrFail();
        $this->assertSame('بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ', $firstAyah->teks_arab);
        $this->assertSame(1, $firstAyah->juz);

        $lastAyah = Ayah::where('surah_id', 114)->where('nomor_ayat', 1)->firstOrFail();
        $this->assertSame(30, $lastAyah->juz);
    }

    public function test_import_command_is_idempotent_when_run_twice(): void
    {
        $this->fakeTwoSurahsApi();

        $this->artisan('quran:import', ['--delay' => 0])->assertExitCode(0);
        $this->artisan('quran:import', ['--delay' => 0])->assertExitCode(0);

        $this->assertDatabaseCount('surahs', 2);
        $this->assertDatabaseCount('ayahs', 4);
    }

    public function test_import_command_fails_validation_when_ayah_count_does_not_match(): void
    {
        $this->fakeTwoSurahsApi(declaredSurahOneAyahCount: 7);

        $this->artisan('quran:import', ['--delay' => 0])
            ->expectsOutputToContain('Validasi gagal')
            ->assertExitCode(1);
    }

    public function test_fresh_option_clears_existing_data_and_related_bookmarks_before_reimporting(): void
    {
        $this->fakeTwoSurahsApi();

        $staleSurah = Surah::factory()->create(['id' => 99, 'jumlah_ayat' => 1]);
        $staleAyah = Ayah::factory()->create(['surah_id' => 99, 'nomor_ayat' => 1]);

        $user = User::factory()->create();
        $category = DoaCategory::factory()->create();
        $doa = Doa::factory()->create(['doa_category_id' => $category->id]);

        Bookmark::create([
            'user_id' => $user->id,
            'bookmarkable_type' => 'surah',
            'bookmarkable_id' => $staleSurah->id,
        ]);
        Bookmark::create([
            'user_id' => $user->id,
            'bookmarkable_type' => 'ayah',
            'bookmarkable_id' => $staleAyah->id,
        ]);
        $doaBookmark = Bookmark::create([
            'user_id' => $user->id,
            'bookmarkable_type' => 'doa',
            'bookmarkable_id' => $doa->id,
        ]);

        $this->artisan('quran:import', ['--fresh' => true, '--force' => true, '--delay' => 0])
            ->assertExitCode(0);

        $this->assertDatabaseMissing('surahs', ['id' => 99]);
        $this->assertDatabaseCount('surahs', 2);
        $this->assertDatabaseCount('ayahs', 4);
        $this->assertDatabaseCount('bookmarks', 1);
        $this->assertDatabaseHas('bookmarks', ['id' => $doaBookmark->id, 'bookmarkable_type' => 'doa']);
    }

    private function fakeTwoSurahsApi(int $declaredSurahOneAyahCount = 2): void
    {
        Http::fake([
            'https://equran.id/api/v2/surat' => Http::response([
                'code' => 200,
                'message' => 'Data retrieved successfully',
                'data' => [
                    $this->sampleSurahPayload(1, 'الفاتحة', 'Al-Fatihah', 'Pembukaan', $declaredSurahOneAyahCount, 'Mekah'),
                    $this->sampleSurahPayload(114, 'الناس', 'An-Nas', 'Manusia', 2, 'Madinah'),
                ],
            ], 200),

            'https://equran.id/api/v2/surat/1' => Http::response([
                'code' => 200,
                'message' => 'Data retrieved successfully',
                'data' => array_merge(
                    $this->sampleSurahPayload(1, 'الفاتحة', 'Al-Fatihah', 'Pembukaan', $declaredSurahOneAyahCount, 'Mekah'),
                    [
                        'ayat' => [
                            [
                                'nomorAyat' => 1,
                                'teksArab' => 'بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ',
                                'teksLatin' => 'Bismillāhir-raḥmānir-raḥīm(i).',
                                'teksIndonesia' => 'Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang.',
                                'audio' => ['05' => 'https://cdn.equran.id/audio-partial/Misyari-Rasyid-Al-Afasi/001001.mp3'],
                            ],
                            [
                                'nomorAyat' => 2,
                                'teksArab' => 'اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَۙ',
                                'teksLatin' => 'Al-ḥamdu lillāhi rabbil-‘ālamīn(a).',
                                'teksIndonesia' => 'Segala puji bagi Allah, Tuhan semesta alam',
                                'audio' => ['05' => 'https://cdn.equran.id/audio-partial/Misyari-Rasyid-Al-Afasi/001002.mp3'],
                            ],
                        ],
                    ]
                ),
            ], 200),

            'https://equran.id/api/v2/surat/114' => Http::response([
                'code' => 200,
                'message' => 'Data retrieved successfully',
                'data' => array_merge(
                    $this->sampleSurahPayload(114, 'الناس', 'An-Nas', 'Manusia', 2, 'Madinah'),
                    [
                        'ayat' => [
                            [
                                'nomorAyat' => 1,
                                'teksArab' => 'قُلْ اَعُوْذُ بِرَبِّ النَّاسِۙ',
                                'teksLatin' => 'Qul a‘ūżu birabbin-nās(i).',
                                'teksIndonesia' => 'Katakanlah (Nabi Muhammad), “Aku berlindung kepada Tuhan manusia,',
                                'audio' => ['05' => 'https://cdn.equran.id/audio-partial/Misyari-Rasyid-Al-Afasi/114001.mp3'],
                            ],
                            [
                                'nomorAyat' => 2,
                                'teksArab' => 'مَلِكِ النَّاسِۙ',
                                'teksLatin' => 'Malikin-nās(i).',
                                'teksIndonesia' => 'raja manusia,',
                                'audio' => ['05' => 'https://cdn.equran.id/audio-partial/Misyari-Rasyid-Al-Afasi/114002.mp3'],
                            ],
                        ],
                    ]
                ),
            ], 200),
        ]);
    }

    private function sampleSurahPayload(
        int $nomor,
        string $nama,
        string $namaLatin,
        string $arti,
        int $jumlahAyat,
        string $tempatTurun
    ): array {
        $padded = str_pad((string) $nomor, 3, '0', STR_PAD_LEFT);

        return [
            'nomor' => $nomor,
            'nama' => $nama,
            'namaLatin' => $namaLatin,
            'jumlahAyat' => $jumlahAyat,
            'tempatTurun' => $tempatTurun,
            'arti' => $arti,
            'deskripsi' => "Deskripsi {$namaLatin}",
            'audioFull' => [
                '05' => "https://cdn.equran.id/audio-full/Misyari-Rasyid-Al-Afasi/{$padded}.mp3",
            ],
        ];
    }
}

