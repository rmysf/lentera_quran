<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $name = (string) env('SUPERADMIN_NAME', 'Super Admin');
        $email = (string) env('SUPERADMIN_EMAIL', 'superadmin@example.com');
        $password = (string) env('SUPERADMIN_PASSWORD', 'password');

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => Hash::make($password),
                'role' => Role::SuperAdmin,
                'email_verified_at' => now(),
            ]
        );
    }
}

