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
        //\App\Models\User::factory(1)->create();
        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'test@example.com',
            'password' => 'test123'
        ]);

        \App\Models\Department::factory(0)->create();
        \App\Models\Employee::factory(20)->create();

    }
}
