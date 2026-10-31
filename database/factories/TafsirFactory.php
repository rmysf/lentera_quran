<?php

namespace Database\Factories;

use App\Models\Ayah;
use App\Models\Tafsir;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tafsir>
 */
class TafsirFactory extends Factory
{
    public function definition(): array
    {
        return [
            'ayah_id' => Ayah::factory(),
            'sumber' => 'Kemenag',
            'isi' => fake()->paragraphs(3, true),
        ];
    }
}

