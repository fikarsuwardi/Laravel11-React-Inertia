<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'id' => 1,
            'name' => 'fikar',
            'email' => 'fikar@mail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => time()
        ]);

        User::factory()->create([
            'id' => 2,
            'name' => 'fikar2',
            'email' => 'fikar2@mail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => time()
        ]);

        // Project::factory()
        //     ->count(5)
        //     ->hasTasks(5)
        //     ->create();
    }
}
