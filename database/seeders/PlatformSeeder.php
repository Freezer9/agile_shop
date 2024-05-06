<?php

namespace Database\Seeders;

use App\Models\Platform;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new Client(['verify' => false]);

        $response = $client->get("https://www.freetogame.com/api/games");
        $data = json_decode($response->getBody()->getContents());

        foreach ($data as $game) {
            $platform = trim($game->platform);
            $existingPlatform = Platform::where('name', $platform)->first();

            if (!$existingPlatform) {
                Platform::create([
                    'name' => $platform
                ]);
            }
        }
    }
}
