<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://kit.fontawesome.com/04fdd6b99f.js" crossorigin="anonymous"></script>
    </head>
    <body class="flex min-h-screen">

        <!-- Desktop -->
        <div class="flex-col hidden bg-teal-700 shadow-lg w-60 lg:flex">
            <div class="w-full shadow-sm">
                <img src="assets/img/logo.png" alt="Logo LifeMotion" class="h-16 m-auto">
            </div>
            <nav class="flex flex-col my-2">

                <x-aside.accordion-primary />

                <x-aside.accordion-primary />
                
                <x-aside.profile />

            </nav>
        </div>

        <!-- Page Content -->
        <main class="flex-1 bg-slate-200">

            <x-layouts.navigation />
            {{ $slot }}
        </main>
    </body>
</html>
