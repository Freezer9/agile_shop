<?php

namespace Database\Seeders;

use App\Models\Category;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new Client(["verify" => false]);
        $response = $client->get("https://www.freetogame.com/api/games");
        $data = json_decode($response->getBody()->getContents());

        foreach ($data as $game) {
            $categoryName = trim($game->genre);
            $existingCategory = Category::where('name', $categoryName)->first();

            if (!$existingCategory) {
                Category::create([
                    'name' => $categoryName,
                    'slug' => Str::lower($categoryName)
                ]);
            }
        }
    }
}
