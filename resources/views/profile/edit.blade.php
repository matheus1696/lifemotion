@extends('adminlte::page')

@section('title', 'Perfil')

@section('content')

    <section class="px-3 py-5">
        <div class="flex flex-col gap-5 lg:flex-row">
            <div class="flex-1 bg-white rounded-md shadow-lg">
                <div class="p-4">
                    <div>
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>
            <div class="flex-1 bg-white rounded-md shadow-lg">
                <div class="p-4">
                    <div>
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('css')
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
@stop