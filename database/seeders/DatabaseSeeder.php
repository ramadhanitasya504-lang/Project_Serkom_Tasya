<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // AKUN ADMIN
        User::updateOrCreate(
            ['username' => 'tasya'],
            [
                'password' => Hash::make('12345678'),
                'role' => 'Admin',
            ]
        );

        // AKUN OPERATOR
        User::updateOrCreate(
            ['username' => 'operator'],
            [
                'password' => Hash::make('87654321'),
                'role' => 'Operator',
            ]
        );
    }
}
