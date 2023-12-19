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
    <body class="text-gray-900">
        <section class="flex min-h-screen">
            <!-- Logo -->
            <div class="items-center justify-center hidden lg:flex-1 lg:flex">
                <img src="assets/img/logo.png" alt="Logo LifeMotion" class="w-80">
            </div>

            <!-- Slot -->
            <div class="flex flex-col items-center justify-center flex-1 px-5 sm:px-0 bg-gradient-to-t from-indigo-500 to-teal-500 dark:bg-gray-900">
                <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md rounded-xl sm:max-w-md dark:bg-gray-800">
                    {{ $slot }}
                </div>
            </div>
        </section>
    </body>
</html>
