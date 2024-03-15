<?php

namespace Database\Seeders;
use Illuminate\Databse\Seedar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Subject::factory(5)->create();

        \App\Models\User::factory()->create([
             'name' => 'Test User',
            'email' => 'test@example.com',
         ]);
    }
}
