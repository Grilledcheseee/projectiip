<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        $products = Product::all();
        return view('transactions.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
        ]);
    
        $product = Product::find($request->product_id);
        $total_price = $product->price * $request->quantity;
    
        $transaction = Transaction::create([
            'total_amount' => $total_price,
        ]);
    
        Sale::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $total_price,
            'transaction_id' => $transaction->id,
        ]);
    
        return redirect()->route('transactions.index')
                         ->with('success', 'Transaction completed successfully.');
    }

    public function show(Transaction $transaction)
    {
        return view('transactions.show', compact('transaction'));
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transactions.index')
                         ->with('success', 'Transaction deleted successfully.');
    }
}
