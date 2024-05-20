<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function index()
    {
        $startDate = Carbon::now()->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();

        $orders = [];
        $currentDate = $startDate;

        while ($currentDate <= $endDate) {
            $orderCount = Order::whereDate('created_at', $currentDate)->count();
            $orders[$currentDate->format('Y-m-d')] = $orderCount;
            $currentDate->addDay();
        }

        // dd($orders);

        return Inertia::render('Admin/Dashboard', ['orders' => $orders]);
    }
}
