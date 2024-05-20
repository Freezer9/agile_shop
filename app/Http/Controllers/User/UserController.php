<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Application;
use Inertia\Inertia;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $products = Product::with('brand', 'category', 'product_images')->orderBy('id', 'desc')->limit(8)->get();

        return Inertia::render('User/Index', [
            'products' => $products,
            'canLogin' => app('router')->has('login'),
            'canRegister' => app('router')->has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

    public function about()
    {
        return Inertia::render('User/Page/About');
    }

    public function detail(int $id)
    {
        $product = Product::where('id', $id)->with('brand', 'category', 'product_images', 'platform')->first();

        // dd($product);

        return Inertia::render('User/Page/DetailProduct', [
            'product' => $product,
        ]);
    }

    public function services()
    {
        return Inertia::render('User/Page/Services');
    }

    public function contact()
    {
        return Inertia::render('User/Page/Contact');
    }
}
