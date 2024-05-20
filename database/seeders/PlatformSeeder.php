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
<<<<<<< HEAD
        $client = new Client(["verify" => false]);
=======
        $client = new Client(['verify' => false]);

>>>>>>> cde9cc4c5ae236fc82733ffdaf94f22a4717bfd0
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
