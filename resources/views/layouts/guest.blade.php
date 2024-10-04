<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'sgmr') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-mr-100">

        <div class="w-full sm:max-w-md px-6  bg-white rounded-t-lg shadow-md flex justify-center items-center">
            <a href="/">
                <img src="{{ asset('images/mr_logo4.png') }}" alt="Logo" class="w-64 h-75">
            </a>
        </div>
        <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-b-lg">
            {{ $slot }}
        </div>
    </div>
    </body>
</html>
