@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-center text-5xl font-bold mt-10 mb-5">Input Complain</h1>
    <form action="{{ route('complaints.store') }}" method="POST" class="max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="customer_name" class="block text- mb-2">Nama Pelanggan:</label>
            <input type="text" id="customer_name" name="customer_name" class="form-control border border-black w-full py-2 px-3" required>
        </div>
        <div class="mb-4">
            <label for="customer_email" class="block text- mb-2">Email:</label>
            <input type="email" id="customer_email" name="customer_email" class="form-control border border-black w-full py-2 px-3" required>
        </div>
        <div class="mb-4">
            <label for="complaint" class="block text-center mb-2">Complain:</label>
            <textarea id="complaint" name="complaint" class="form-control border border-black w-full py-2 px-3" maxlength="300" required></textarea>
            <div class="text-right mt-2">
                <span id="current">0</span>
                <span id="maximum">/ 300</span>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary mt-3">
                <img src="{{ asset('Submit.jpg') }}" alt="Submit" style="width: 100px; height: 35px;">
            </button>
        </div>
    </form>
</div>

<script>
    // Get the textarea element
    const textarea = document.getElementById('complaint');

    // Add event listener for input events (e.g., typing)
    textarea.addEventListener('input', function() {
        // Get the current character count
        const currentLength = textarea.value.length;

        // Update the span element showing the current count
        document.getElementById('current').textContent = currentLength;
    });
</script>
@endsection
