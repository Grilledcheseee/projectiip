@extends('layouts.app')

@section('content')
<div class="container mx-auto">
<h1 class="text-center text-5xl font-bold mt-10 mb-5">Tambah Pegawai</h1>
    <form action="{{ route('employees.store') }}" method="POST" class="max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label>Nama:</label>
            <input type="text" name="name" class="form-control border border-black w-full py-2 px-3" required>
        </div>
        <div class="mb-4">
            <label>Email:</label>
            <input type="email" name="email" class="form-control border border-black w-full py-2 px-3" required>
        </div>
        <div class="mb-4">
            <label>Jabatan:</label>
            <input type="text" name="position" class="form-control border border-black w-full py-2 px-3" required>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary mt-3">
                <img src="{{ asset('Submit.jpg') }}" alt="Submit" style="width: 100px; height: 35px;">
            </button>
        </div>
    </form>
</div>
@endsection
