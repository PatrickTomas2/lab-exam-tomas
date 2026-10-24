<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User One',
            'email' => 'userone@example.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'User Two',
            'email' => 'usertwo@example.com',
            'password' => bcrypt('password'),
        ]);

        foreach (['BSIT', 'BSCS', 'BSIS'] as $courseName) {
            Course::create(['name' => $courseName]);
        }
    }
}
