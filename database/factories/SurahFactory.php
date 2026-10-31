<?php

namespace Database\Factories;

use App\Models\Surah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Surah>
 */
class SurahFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id' => fake()->unique()->numberBetween(1, 114),
            'nama_arab' => 'الفاتحة',
            'nama_latin' => fake()->lexify('Al-??????'),
            'arti' => fake()->words(2, true),
            'jumlah_ayat' => fake()->numberBetween(3, 286),
            'tempat_turun' => fake()->randomElement(['mekah', 'madinah']),
            'deskripsi' => fake()->paragraph(),
            'audio_url' => fake()->url(),
        ];
    }
}

