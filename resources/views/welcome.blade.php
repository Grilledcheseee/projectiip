<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">


    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">

    <style>
        /* Custom Styles */
        body {
            font-family: 'Figtree', ui-sans-serif, system-ui, sans-serif;
            background-color: #f7fafc; /* Light blue-grey background */
            display: wrap;
            flex-direction: column;
            min-height: 100vh; /* Ensure full height of viewport */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }
        .gradient-bg {
            background: linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D, #F77737, #FCAF45, #FFDC80);
            height: 1000px;
        }
        .main-header {
            background-color: black;
            padding: 10px;
        }
        .logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        .menu-icons {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            column-gap: 500px; /* Adjust gap between menu items */
            row-gap: 100px;
            margin: 5px 0 3px; /* Adjust margin */
        }
        .flip-card {
            background-color: transparent;
            width: 180px;
            height: 120px;
            perspective: 1000px; /* Remove this if you don't want the 3D effect */
        }
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15); /* Enhanced shadow on hover */
        }
        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: transparent;
        }
        .flip-card-back {
            transform: rotateY(180deg);
        }
        .flip-card img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        .footer {
            background-color: #edf2f7; /* Light grey footer */
            color: #718096; /* Grey text */
            padding: 1rem 0; /* Adjusted padding */
            text-align: center;
            position: fixed; /* Fixed position */
            bottom: 0; /*Stick to the bottom */
            width: 100%; /* Full width */
        }
        sdsd
    </style>
</head>
<body class="antialiased bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation Menu -->
        <nav class="shadow gradient-bg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex flex-col">
                        <!-- Header -->
                        <header class="main-header">
                            <div class="shrink-0 flex items-center">
                                <a href="{{ url('/') }}" class="flex items-center">
                                    <img src="{{ asset('logo.png') }}" alt="Logo" class="logo" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                                    <span class="ml-2 text-white text-xl font-bold"></span>
                                </a>
                            </div>
                        </header>
                        <!-- Menu -->
                        <div class="flex items-center">
                            <div class="menu-icons">
                                <a href="{{ url('/attendances') }}" class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="{{ asset('attendance.png') }}" alt="Attendance Icon">
                                        </div>
                                        <div class="flip-card-back">
                                            <img src="{{ asset('attendance2.png') }}" alt="Attendance Icon">
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ url('/complaints') }}" class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="{{ asset('Complaints.png') }}" alt="Complaints Icon">
                                        </div>
                                        <div class="flip-card-back">
                                            <img src="{{ asset('Complaints2.png') }}" alt="Complaints Icon">
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ url('/employees') }}" class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="{{ asset('Employees.png') }}" alt="Employees Icon">
                                        </div>
                                        <div class="flip-card-back">
                                            <img src="{{ asset('Employees2.png') }}" alt="Employees Icon">
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ url('/orders') }}" class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="{{ asset('Orders.png') }}" alt="Orders Icon">
                                        </div>
                                        <div class="flip-card-back">
                                            <img src="{{ asset('Orders2.png') }}" alt="Orders Icon">
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ url('/products') }}" class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="{{ asset('Products.png') }}" alt="Products Icon">
                                        </div>
                                        <div class="flip-card-back">
                                            <img src="{{ asset('Products2.png') }}" alt="Products Icon">
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ url('reports/financial') }}" class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="{{ asset('Report.png') }}" alt="Report Icon">
                                        </div>
                                        <div class="flip-card-back">
                                            <img src="{{ asset('Report2.png') }}" alt="Report Icon">
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ url('/sales') }}" class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="{{ asset('Sales.png') }}" alt="Sales Icon">
                                        </div>
                                        <div class="flip-card-back">
                                            <img src="{{ asset('Sales2.png') }}" alt="Sales Icon">
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ url('/transactions') }}" class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="{{ asset('Transactions.png') }}" alt="Transactions Icon">
                                        </div>
                                        <div class="flip-card-back">
                                            <img src="{{ asset('Transactions2.png') }}" alt="Transactions Icon">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content-->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="text-sm text-gray-500">© 2024 IIP Project. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>
