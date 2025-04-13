<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);
        
        User::factory()->create([
            'name' => Str::random(10),
            'email' => 'owner@gmail.com',
            'role' => 'owner',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => Str::random(10),
            'email' => 'member@gmail.com',
            'role' => 'member',
            'password' => Hash::make('password'),
        ]);
    }
}
