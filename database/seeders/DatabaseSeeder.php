<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Quiz;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->has(Quiz::factory()->count(3), 'quizes')->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password'
        ]);
    }
}
