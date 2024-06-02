<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function index()
    {
        $startDate = Carbon::now()->startOfYear();
        $endDate = Carbon::now()->endOfYear();
        $startDate = Carbon::now()->startOfYear();
        $endDate = Carbon::now()->endOfYear();

        $orders = [];
        $currentDate = $startDate;

        while ($currentDate <= $endDate) {
            $month = $currentDate->format('Y-m');
            if (!isset($orders[$month])) {
                $orders[$month] = 0;
            }
            $orderCount = Order::whereMonth('created_at', $currentDate->month)
                ->whereYear('created_at', $currentDate->year)
                ->count();
            $orders[$month] = $orderCount;
            $currentDate->addMonth();
            $month = $currentDate->format('Y-m');
            if (!isset($orders[$month])) {
                $orders[$month] = 0;
            }
            $orderCount = Order::whereMonth('created_at', $currentDate->month)
                ->whereYear('created_at', $currentDate->year)
                ->count();
            $orders[$month] = $orderCount;
            $currentDate->addMonth();
        }

        // Total customers, products, orders
        $customers = Order::select('user_address_id')->distinct()->count();
        $products = Product::count();
        $totalOrders = Order::count();

        // extract the value remove the key
        foreach ($orders as $order) {
            $ordersValue[] = $order;
        }


        return Inertia::render('Admin/Dashboard', ['orders' => $ordersValue, 'customers' => $customers, 'products' => $products, 'totalOrders' => $totalOrders]);
    }
}
