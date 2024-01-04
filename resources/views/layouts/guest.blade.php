<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://kit.fontawesome.com/04fdd6b99f.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="flex min-h-screen">

            <!-- Logo Large Screen -->
            <div class="items-center justify-center hidden lg:flex-1 lg:flex">
                <img src="assets/img/logo.png" alt="Logo LifeMotion" class="w-72">
            </div>

            <div class="flex flex-col items-center justify-center flex-1 px-5 sm:px-0 bg-gradient-to-t from-indigo-500 to-teal-500">
                <div class="w-full px-6 py-4 overflow-hidden bg-white shadow-md rounded-xl sm:max-w-md">
                    
                    <!-- Logo Small Screen -->
                    <div class="lg:hidden">
                        <div class="flex items-center justify-center">
                            <img src="assets/img/logo.png" alt="Logo LifeMotion" width="100">
                        </div>
                    </div>
                    
                    @yield('content')
                </div>
            </div>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    </body>
</html>
