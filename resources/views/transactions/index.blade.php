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
<h1 class="text-center text-5xl font-bold">Daftar Transaksi</h1>
<div style="margin-top: 50px;">
        <a href="{{ route('transactions.create') }}">
            <img src="{{ asset('ButtonAbsen.jpg') }}" alt="Tambah Complain" style="width: 150px; height: 50px;">
        </a>
        <table class="min-w-full bg-white border border-gray-300 mt-3">
        <thead>
            <tr>
            <th class="py-2 px-4 border-b border-gray-300">ID</th>
            <th class="py-2 px-4 border-b border-gray-300">Total Amount</th>
            <th class="py-2 px-4 border-b border-gray-300">Date</th>
            <th class="py-2 px-4 border-b border-gray-300">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
            <td class="py-2 px-4 border-b border-gray-300">{{ $transaction->id }}</td>
            <td class="py-2 px-4 border-b border-gray-300">{{ $transaction->total_amount }}</td>
            <td class="py-2 px-4 border-b border-gray-300">{{ $transaction->created_at }}</td>
                <td>
                    <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
