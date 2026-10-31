<?php

namespace Database\Factories;

use App\Models\LastRead;
use App\Models\Surah;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LastRead>
 */
class LastReadFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'surah_id' => Surah::factory(),
            'ayah_id' => null,
        ];
    }
}

