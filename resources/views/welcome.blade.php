<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Spin the Wheel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-[#009f00] to-[#777]">
        <div class="w-full sm:max-w-md px-6 py-8 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex justify-center mb-8">

            </div>

            @if (Route::has('login'))
            <div class="flex flex-col space-y-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="w-full flex items-center justify-center px-4 py-2 bg-[#009f00] border border-transparent rounded-md font-semibold text-white hover:bg-[#007700] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#009f00] transition ease-in-out duration-150">
                        Dashboard
                    </a>
                    <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-4 py-2 bg-[#009f00] border border-transparent rounded-md font-semibold text-white hover:bg-[#007700] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#009f00] transition ease-in-out duration-150">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-4 py-2 bg-[#777] border border-transparent rounded-md font-semibold text-white hover:bg-[#555] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#777] transition ease-in-out duration-150">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
</body>
</html>
