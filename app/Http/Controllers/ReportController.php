<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;

class ReportController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();

        $totalQuantity = Product::sum('quantity');

        $totalOrders = Order::count();

        $products = Product::latest()->get();

        return view('reports.index', compact(
            'totalProducts',
            'totalQuantity',
            'totalOrders',
            'products'
        ));
    }
}