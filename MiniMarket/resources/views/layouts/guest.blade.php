<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-gradient-to-b from-gray-100 via-gray-200 to-gray-100">
        <div class="min-h-screen flex flex-col justify-center items-center py-8">
            <div class="w-full sm:max-w-md px-6 py-6 bg-gray-100 shadow-md rounded-lg border border-gray-300">
                <div class="mb-6 flex justify-center">
                    <a href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-24 h-24">
                    </a>
                </div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
