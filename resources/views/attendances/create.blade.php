@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-center text-5xl font-bold mt-10 mb-5">Input Absen</h1>
    <form action="{{ route('attendances.store') }}" method="POST" class="mx-auto max-w-lg">
        @csrf
        <div class="mb-4">
            <label for="employee_id" class="block text- mb-2">Pilih karyawan:</label>
            <select name="employee_id" id="employee_id" class="form-control border border-black mx-auto w-full py-2 px-3">
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="status" class="block text- mb-2">Status:</label>
            <select name="status" id="status" class="form-control border border-black mx-auto w-full py-2 px-3">
                <option value="present">Present</option>
                <option value="sick_leave">Sick Leave</option>
                <option value="other_leave">Other Leave</option>
                <option value="maternity_leave">Maternity Leave</option>
                <option value="training">Training</option>
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary mt-3">
                <img src="{{ asset('Submit.jpg') }}" alt="Submit" style="width: 100px; height: 35px;">
            </button>
        </div>
    </form>
</div>
@endsection
