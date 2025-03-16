<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Johny',
            'last_name' => 'Doee',
            'email' => 'johns.doe@example.com',
            'password' => Hash::make('password'), // Hash the password
        ]);
    }
}