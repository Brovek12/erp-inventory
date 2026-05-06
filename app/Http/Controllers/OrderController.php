<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('items.product')
            ->latest()
            ->get();

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();

        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::findOrFail($request->product_id);

        if ($product->quantity < $request->quantity) {

            return back()->with(
                'error',
                'Stock is insufficient'
            );
        }

        $order = Order::create([
            'order_code' => 'ORD-' . time()
        ]);

        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $request->quantity
        ]);

        $product->decrement(
            'quantity',
            $request->quantity
        );

        return redirect()
            ->route('orders.index')
            ->with('success', 'Order created');
    }
}