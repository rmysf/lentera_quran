<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<UserSetting>
 */
class UserSettingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'ukuran_font_arab' => 28,
            'tampilkan_latin' => true,
            'tampilkan_terjemahan' => true,
            'tema' => 'sistem',
        ];
    }
}

