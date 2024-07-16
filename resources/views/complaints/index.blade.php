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
<h1 class="text-center text-5xl font-bold">Daftar Complain</h1>
<div style="margin-top: 50px;">
    <a href="{{ route('complaints.create') }}">
        <img src="{{ asset('ButtonAbsen.jpg') }}" alt="Tambah Complain" style="width: 150px; height: 50px;">
    </a>
</div>

    <table class="min-w-full bg-white border border-gray-300 mt-3">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-300">ID</th>
                <th class="py-2 px-4 border-b border-gray-300">Nama Pelanggan</th>
                <th class="py-2 px-4 border-b border-gray-300">Email</th>
                <th class="py-2 px-4 border-b border-gray-300">Complain</th>
                <th class="py-2 px-4 border-b border-gray-300">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($complaints as $complaint)
            <tr>
                <td class="py-2 px-4 border-b border-gray-300">{{ $complaint->id }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $complaint->customer_name }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $complaint->customer_email }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $complaint->complaint }}</td>
                <td>
                    <form action="{{ route('complaints.destroy', $complaint->id) }}" method="POST" style="display:inline;">
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
