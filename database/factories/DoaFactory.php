<?php

namespace Database\Factories;

use App\Models\Doa;
use App\Models\DoaCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Doa>
 */
class DoaFactory extends Factory
{
    public function definition(): array
    {
        $judul = fake()->unique()->sentence(3);

        return [
            'doa_category_id' => DoaCategory::factory(),
            'judul' => $judul,
            'slug' => Str::slug($judul).'-'.fake()->unique()->numberBetween(1, 9999),
            'teks_arab' => 'رَبَّنَا آتِنَا فِي الدُّنْيَا حَسَنَةً',
            'teks_latin' => 'Rabbana atina fid-dunya hasanah',
            'terjemahan' => fake()->sentence(),
            'sumber' => 'HR. Bukhari',
            'is_published' => true,
        ];
    }
}

