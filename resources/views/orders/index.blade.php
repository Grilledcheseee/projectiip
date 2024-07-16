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
<h1 class="text-center text-5xl font-bold">Daftar Order</h1>
<div style="margin-top: 50px;">
<a href="{{ route('orders.create') }}">
        <img src="{{ asset('ButtonAbsen.jpg') }}" alt="Tambah Complain" style="width: 150px; height: 50px;">
    </a>
</div>
<table class="min-w-full bg-white border border-gray-300 mt-3">
        <thead>
            <tr>
            <th class="py-2 px-4 border-b border-gray-300">ID</th>
            <th class="py-2 px-4 border-b border-gray-300">Produk</th>
            <th class="py-2 px-4 border-b border-gray-300">Jumlah</th>
            <th class="py-2 px-4 border-b border-gray-300">Total Harga</th>
            <th class="py-2 px-4 border-b border-gray-300">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
            <td class="py-2 px-4 border-b border-gray-300">{{ $order->id }}</td>
            <td class="py-2 px-4 border-b border-gray-300">{{ $order->product->name }}</td>
            <td class="py-2 px-4 border-b border-gray-300">{{ $order->quantity }}</td>
            <td class="py-2 px-4 border-b border-gray-300">{{ $order->total_price }}</td>
            <td class="py-2 px-4 border-b border-gray-300">
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
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
