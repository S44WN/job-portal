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
        // Seed the Users table
        \App\Models\User::factory(10)->create();

        // Seed the Categories table
        \App\Models\Category::factory(5)->create();

        // Seed the Job Types table
        \App\Models\JobType::factory(5)->create();

        // Seed the Jobs table
        \App\Models\Job::factory(20)->create();


    }
}
