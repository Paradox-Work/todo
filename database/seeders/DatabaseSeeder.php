<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create multiple users
        User::factory()->count(10)->create();

        // Or a specific user for login tests
        User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'), // always hash
        ]);

        $this->call([
            TodoSeeder::class, // call your TodoSeeder too if you want
        ]);
    }
}
