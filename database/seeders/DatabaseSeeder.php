<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Food;
use App\Models\Review;
use App\Models\User;
use App\Models\CategoryAge;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Food::factory(10)->create();
        Review::factory(10)->create();
        CategoryAge::factory(10)->create();
    }
}
