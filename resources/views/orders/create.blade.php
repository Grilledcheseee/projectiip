@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-center text-5xl font-bold mt-10 mb-5">Tambah Order</h1>
    <form action="{{ route('orders.store') }}" method="POST" class="max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="product_id">Produk:</label>
            <select name="product_id" class="form-control border border-black mx-auto w-full py-2 px-3" required>
                @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label>Jumlah:</label>
            <input type="number" name="quantity" min="0" class="form-control border border-black mx-auto w-full py-2 px-3" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary mt-3">
                <img src="{{ asset('Submit.jpg') }}" alt="Submit" style="width: 100px; height: 35px;">
            </button>
        </div>
    </form>
</div>
@endsection
