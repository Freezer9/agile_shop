<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Client;
use Illuminate\Foundation\Application;
use Inertia\Inertia;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $products = Product::with('brand', 'category', 'product_images')->orderBy('id', 'desc')->limit(8)->get();
        // $client = new Client();
        // $response = $client->get("https://www.freetogame.com/api/games");
        // $data = json_decode($response->getBody()->getContents());

        // foreach ($data as $game) {
        //     $categoryId = Category::where('name', $game->genre)->first()->id;
        // }

        return Inertia::render('User/Index', [
            'products' => $products,
            'canLogin' => app('router')->has('login'),
            'canRegister' => app('router')->has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }
}
