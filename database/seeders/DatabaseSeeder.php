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
        $this->call(
            UserSeeder::class
        );
        $this->call(
            EducationSeeder::class
        );
        $this->call(
            SkillsSeeder::class
        );
        $this->call(
            UserDetailSeeder::class
        );
        $this->call(
            RefereesSeeder::class
        );

        $this->call(
            ExperienceSeeder::class
        );
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
