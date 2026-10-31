<?php

namespace Database\Factories;

use App\Models\Bookmark;
use App\Models\Surah;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Bookmark>
 */
class BookmarkFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'bookmarkable_type' => 'surah',
            'bookmarkable_id' => Surah::factory(),
            'catatan' => fake()->optional()->sentence(),
        ];
    }
}

