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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex h-screen bg-gray-100">
        <aside class="w-64 bg-gray-950">
            <a class="block py-4 px-6 text-gray-100" href="{{ route('dashboard') }}">Laravel</a>
            <a class="block py-4 px-6 text-gray-100" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="block py-4 px-6 text-gray-100" href="{{ route('projects.index') }}">Projects</a>
        </aside>

        <div class="flex-1">
            <header class="max-w-full mx-auto sm:px-6 lg:px-10 py-10 bg-white shadow-sm">
                {{ $header }}
            </header>

            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
