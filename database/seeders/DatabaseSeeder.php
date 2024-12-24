<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserManagement\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'sadmin@example.com',
            'date_of_birth' => now(),
            'sex' => 'M',
            'phone' => 1234567890,
            'password' => Hash::make('123456')
        ]);
    }
}
