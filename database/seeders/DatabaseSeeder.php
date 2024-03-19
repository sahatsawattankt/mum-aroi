<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Member;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@example.com',
        ]);
        Admin::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@example.com',
        ]);
        Member::factory()->create([
            'name' => 'Test Member',
            'email' => 'member@example.com',
        ]);
    }
}
