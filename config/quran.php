<?php

return [
    'base_url' => env('QURAN_API_BASE_URL', 'https://equran.id/api/v2'),

    'source_name' => 'EQuran.id',

    'translator_name' => 'Kementerian Agama Republik Indonesia (Kemenag RI)',

    'request_delay_ms' => 150,

    'timeout_seconds' => 30,

    'retry_times' => 3,

    'retry_sleep_ms' => 500,

    'qari_id' => '05',

    'qari_name' => 'Misyari Rasyid Al-Afasi',

    'validation' => [
        'expected_surah_count' => 114,
        'expected_ayah_count' => 6236,
        'expected_juz_count' => 30,
    ],

    // Posisi awal tiap Juz (1..30) sesuai Mushaf Standar Indonesia (Kemenag RI) / Mushaf Madinah
    'juz_starts' => [
        1 => ['surah_id' => 1, 'nomor_ayat' => 1],
        2 => ['surah_id' => 2, 'nomor_ayat' => 142],
        3 => ['surah_id' => 2, 'nomor_ayat' => 253],
        4 => ['surah_id' => 3, 'nomor_ayat' => 93],
        5 => ['surah_id' => 4, 'nomor_ayat' => 24],
        6 => ['surah_id' => 4, 'nomor_ayat' => 148],
        7 => ['surah_id' => 5, 'nomor_ayat' => 83],
        8 => ['surah_id' => 6, 'nomor_ayat' => 111],
        9 => ['surah_id' => 7, 'nomor_ayat' => 88],
        10 => ['surah_id' => 8, 'nomor_ayat' => 41],
        11 => ['surah_id' => 9, 'nomor_ayat' => 93],
        12 => ['surah_id' => 11, 'nomor_ayat' => 6],
        13 => ['surah_id' => 12, 'nomor_ayat' => 53],
        14 => ['surah_id' => 15, 'nomor_ayat' => 1],
        15 => ['surah_id' => 17, 'nomor_ayat' => 1],
        16 => ['surah_id' => 18, 'nomor_ayat' => 75],
        17 => ['surah_id' => 21, 'nomor_ayat' => 1],
        18 => ['surah_id' => 23, 'nomor_ayat' => 1],
        19 => ['surah_id' => 25, 'nomor_ayat' => 21],
        20 => ['surah_id' => 27, 'nomor_ayat' => 56],
        21 => ['surah_id' => 29, 'nomor_ayat' => 46],
        22 => ['surah_id' => 33, 'nomor_ayat' => 31],
        23 => ['surah_id' => 36, 'nomor_ayat' => 28],
        24 => ['surah_id' => 39, 'nomor_ayat' => 32],
        25 => ['surah_id' => 41, 'nomor_ayat' => 47],
        26 => ['surah_id' => 46, 'nomor_ayat' => 1],
        27 => ['surah_id' => 51, 'nomor_ayat' => 31],
        28 => ['surah_id' => 58, 'nomor_ayat' => 1],
        29 => ['surah_id' => 67, 'nomor_ayat' => 1],
        30 => ['surah_id' => 78, 'nomor_ayat' => 1],
    ],
];

