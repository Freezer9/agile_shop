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
<<<<<<< HEAD
        $client = new Client(["verify" => false]);
=======
        $client = new Client(['verify' => false]);

>>>>>>> cde9cc4c5ae236fc82733ffdaf94f22a4717bfd0
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
