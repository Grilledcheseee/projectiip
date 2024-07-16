<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function financial()
    {
        $transactions = Transaction::all();
        $total_income = $transactions->sum('total_amount');

        return view('reports.financial', compact('transactions', 'total_income'));
    }
}

