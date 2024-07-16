@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-center text-5xl font-bold mt-10 mb-5">Tambah Barang</h1>
    <form action="{{ route('products.store') }}" method="POST" class="max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text- mb-2">Nama Barang:</label>
            <input type="text" name="name" id="name"  class="form-control border border-black mx-auto w-full py-2 px-3" required>
        </div>
        <div class="mb-4">
            <label for="quantity"class="block text- mb-2">Jumlah:</label>
            <input type="number" name="quantity" id="quantity"  class="form-control border border-black mx-auto w-full py-2 px-3" required>
        </div>
        <div class="mb-4">
            <label for="price" class="block text- mb-2">Harga:</label>
            <input type="text" name="price" id="price"  class="form-control border border-black mx-auto w-full py-2 px-3" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary mt-3">
                <img src="{{ asset('Submit.jpg') }}" alt="Submit" style="width: 100px; height: 35px;">
            </button>
        </div>
    </form>
</div>
@endsection
