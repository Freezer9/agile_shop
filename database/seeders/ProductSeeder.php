<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Platform;
use App\Models\Product;
use Database\Factories\ProductFactory;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = new Faker();
        $client = new Client(['verify' => false]);

        $response = $client->get("https://www.freetogame.com/api/games");
        $data = json_decode($response->getBody()->getContents());

        foreach ($data as $game) {
            $category = Category::where('name', $game->genre)->first();
            $brand = Brand::where('publisher', $game->publisher)->where('developer', $game->developer)->first();
            $platform = Platform::where('name', $game->platform)->first();

            $brandId = $brand ? $brand->id : 1;
            $categoryId = $category ? $category->id : 1;
            $platformId = $platform ? $platform->id : 1;
            if ($game->release_date) {
                $releaseDate = date('Y-m-d', strtotime($game->release_date));
            } else {
                $releaseDate = null;
            }

            Product::create([
                'title' => $game->title,
                'price' => $faker->randomFloat(2, 1, 100),
                'category_id' => $categoryId,
                'brand_id' => $brandId,
                'platform_id' => $platformId,
                'description' => $game->short_description,
                'release_date' => $releaseDate
            ])->product_images()->create([
                'image' => $game->thumbnail,
                'alt_text' => $game->title
            ]);
        }
    }
}
