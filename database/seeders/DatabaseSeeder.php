<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use App\Models\User;
use App\Models\Admin;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        // User
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test.user@example.com',
            'password'=> Hash::make('testuser'),
            'phone_number' => '0929222922',
            'point' => 10000,
        ]);

        // Admin
        Admin::create([
            "name"=> "Admin",
            "email"=> "admin@example.com",
            "password"=> Hash::make('admin1234'),
        ]);

        // Menu
        Menu::create([
            "name"=> "Double-Cheese Meat Burgur",
            "description"=> "Esse officia culpa duis amet aliquip cupidatat quis proident et incididunt nisi et officia.",
            "category_id"=> 1,
            "price"=> 120.00,
        ]);
        Menu::create([
            "name"=> "Veggie Burgur",
            "description"=> "Esse officia culpa duis amet aliquip cupidatat quis proident et incididunt nisi et officia.",
            "category_id"=> 1,
            "price"=> 140.00,
        ]);
        Menu::create([
            "name"=> "Sphaghetti Cabonara",
            "description"=> "Esse officia culpa duis amet aliquip cupidatat quis proident et incididunt nisi et officia.",
            "category_id"=> 2,
            "price"=> 225.00,
        ]);
        Menu::create([
            "name"=> "Coca-Cola",
            "description"=> "Esse officia culpa duis amet aliquip cupidatat quis proident et incididunt nisi et officia.",
            "category_id"=> 3,
            "price"=> 50.00,
        ]);

        // Category
        Category::create([
            "name" => "Burger",
        ]);
        Category::create([
            "name" => "Sphaghetti",
        ]);
        Category::create([
            "name" => "Drinks",
        ]);

    }
}
