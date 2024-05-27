<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index()
    {
        $brand = Category::get();

        dd($brand);

        return Inertia::render('Admin/Category/Index');
    }
}
