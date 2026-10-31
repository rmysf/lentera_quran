<?php

namespace Database\Factories;

use App\Models\Ayah;
use App\Models\Surah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ayah>
 */
class AyahFactory extends Factory
{
    public function definition(): array
    {
        return [
            'surah_id' => Surah::factory(),
            'nomor_ayat' => fake()->numberBetween(1, 286),
            'teks_arab' => 'بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ',
            'teks_latin' => 'Bismillahirrahmanirrahim',
            'terjemahan' => fake()->sentence(),
            'juz' => fake()->numberBetween(1, 30),
            'halaman' => fake()->numberBetween(1, 604),
            'audio_url' => fake()->url(),
        ];
    }
}

