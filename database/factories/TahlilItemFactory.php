<?php

namespace Database\Factories;

use App\Models\TahlilItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TahlilItem>
 */
class TahlilItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'urutan' => fake()->numberBetween(1, 50),
            'judul' => fake()->sentence(3),
            'teks_arab' => 'لَا إِلَٰهَ إِلَّا اللَّهُ',
            'teks_latin' => 'La ilaha illallah',
            'terjemahan' => fake()->sentence(),
            'jumlah_baca' => 1,
            'keterangan' => fake()->optional()->sentence(),
            'is_published' => true,
        ];
    }
}

