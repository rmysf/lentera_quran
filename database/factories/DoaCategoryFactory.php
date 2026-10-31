<?php

namespace Database\Factories;

use App\Models\DoaCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<DoaCategory>
 */
class DoaCategoryFactory extends Factory
{
    public function definition(): array
    {
        $nama = fake()->unique()->words(2, true);

        return [
            'nama' => ucwords($nama),
            'slug' => Str::slug($nama).'-'.fake()->unique()->numberBetween(1, 9999),
            'urutan' => fake()->numberBetween(1, 20),
        ];
    }
}

