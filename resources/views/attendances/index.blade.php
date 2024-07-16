@extends('layouts.app')

@section('content')
<div class="container ">
<header class="main-header" style="background-color: black; padding : 10px" >
                            <div class="shrink-0 flex items-center">
                                <a href="{{ url('/') }}">
                                <img src="{{ asset('logo.png') }}" alt="Logo" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                                </a>
                            </div>
                        </header>
    <h1 class="text-center text-5xl font-bold">Daftar Absensi</h1>
    <a href="{{ route('attendances.create') }}">
        <img src="{{ asset('ButtonAbsen.jpg') }}" alt="Masukkan Absensi" style="width: 100px; height: 35px;">
    </a>

    <table class="min-w-full bg-white border border-gray-300 mt-3">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-300">Nama</th>
                <th class="py-2 px-4 border-b border-gray-300">Status</th>
                <th class="py-2 px-4 border-b border-gray-300">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
            <tr>
                <td class="py-2 px-4 border-b border-gray-300">{{ $attendance->employee->name }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $attendance->status }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $attendance->date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
frf