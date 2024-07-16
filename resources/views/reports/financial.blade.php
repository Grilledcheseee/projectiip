@extends('layouts.app')

@section('content')
<div class="container">
<header class="main-header" style="background-color: black; padding : 10px" >
                            <div class="shrink-0 flex items-center">
                                <a href="{{ url('/') }}">
                                <img src="{{ asset('logo.png') }}" alt="Logo" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                                </a>
                            </div>
                        </header>
<h1 class="text-center text-5xl font-bold">Laporan Keuangan</h1>
<table class="min-w-full bg-white border border-gray-300 mt-3">
        <thead>
            <tr>
            <th class="py-2 px-4 border-b border-gray-300">ID</th>
            <th class="py-2 px-4 border-b border-gray-300">Total Amount</th>
            <th class="py-2 px-4 border-b border-gray-300">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
            <td class="py-2 px-4 border-b border-gray-300">{{ $transaction->id }}</td>
            <td class="py-2 px-4 border-b border-gray-300">{{ $transaction->total_amount }}</td>
            <td class="py-2 px-4 border-b border-gray-300">{{ $transaction->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Total Income: {{ $total_income }}</h3>
</div>
@endsection
