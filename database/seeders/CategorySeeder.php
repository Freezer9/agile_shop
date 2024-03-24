<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'RPG',
            'slug' => 'rpg'
        ]);

        Category::create([
            'name' => 'Strategy',
            'slug' => 'strategy'
        ]);

        Category::create([
            'name' => 'Sports',
            'slug' => 'sports'
        ]);
    }
}
