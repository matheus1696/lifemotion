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
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="text-gray-900">
        <section class="flex min-h-screen">
            <div class="items-center justify-center bg-gray-800 lg:flex-1 hidden lg:flex">
                <img src="assets/img/logo.png" alt="Logo LifeMotion" class="w-80">
            </div>
            <div class="flex flex-col items-center justify-center flex-1 bg-gray-100 dark:bg-gray-900 shadow-2xl">
                <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md dark:bg-gray-800 sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </section>
    </body>
</html>
