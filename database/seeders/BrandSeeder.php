<?php

namespace Database\Seeders;

use App\Models\Brand;
use GuzzleHttp\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
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
            $brandPublisher = trim($game->publisher);
            $brandDeveloper = trim($game->developer);
            $existingPublisher = Brand::where('publisher', $brandPublisher)->first();
            $existingDeveloper = Brand::where('developer', $brandDeveloper)->first();

            if (!$existingPublisher && !$existingDeveloper) {
                Brand::create([
                    'publisher' => $brandPublisher,
                    'developer' => $brandDeveloper
                ]);
            }
        }
    }
}
