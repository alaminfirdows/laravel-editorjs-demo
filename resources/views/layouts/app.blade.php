<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    @stack('styles')
</head>

<body class="font-sans antialiased bg-white">
    <div class="min-h-screen max-h-screen overflow-hidden overflow-y-auto">
        <x-header />

        <!-- Page Content -->
        <main class="flex-1 py-6">
            {{ $slot }}
        </main>
    </div>

    @stack('scripts')
</body>

</html>
