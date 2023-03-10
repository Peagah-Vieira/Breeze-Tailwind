<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstName' => 'User',
            'lastName' => 'Name',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('user1234'),
        ]);

        User::factory(50)->create();
    }
}
