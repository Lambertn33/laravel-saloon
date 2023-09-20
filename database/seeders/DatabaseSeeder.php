<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::create([
            'names' => 'Test User',
            'email' => 'user@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('user12345')
        ]);
    }
}
