<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Product::Create([
            'name' => $request->name,
            'quantity' => $request->quantity,
       ]);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         Product::findOrFail($id)->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
      
    }
    public function increase($id)
    {
        $product = Product::findOrFail($id);
        $product->quantity += 1;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product quantity increased successfully.');
    }
    public function decrease($id)
    {
        $product = Product::findOrFail($id);
        if ($product->quantity > 0) {
            $product->quantity -= 1;
            $product->save();
            return redirect()->route('products.index')->with('success', 'Product quantity decreased successfully.');
        } else {
            return redirect()->route('products.index')->with('error', 'Product quantity cannot be less than zero.');
        }
    }
}
