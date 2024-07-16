<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::with('product')->get();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $products = Product::all();
        return view('sales.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
        ]);

        $product = Product::find($request->product_id);
        $total_price = $product->price * $request->quantity;

        Sale::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $total_price,
        ]);

        return redirect()->route('sales.index')
                         ->with('success', 'Sale recorded successfully.');
    }

    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        $products = Product::all();
        return view('sales.edit', compact('sale', 'products'));
    }

    public function update(Request $request, Sale $sale)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
        ]);

        $product = Product::find($request->product_id);
        $total_price = $product->price * $request->quantity;

        $sale->update([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $total_price,
        ]);

        return redirect()->route('sales.index')
                         ->with('success', 'Sale updated successfully.');
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();

        return redirect()->route('sales.index')
                         ->with('success', 'Sale deleted successfully.');
    }
}

