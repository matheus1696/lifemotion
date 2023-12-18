@extends('adminlte::page')

@section('title', 'Perfil')

@section('content')

    <section class="py-3">
        <div class="mt-3 bg-white rounded row">
            <div class="col-lg-6 col-12">
                <div class="p-4">
                    <div>
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="p-4">
                    <div>
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3 bg-white rounded row">
            <div class="col-lg-6 col-12">
                <div class="p-4">
                    @include('profile.partials.delete-user-form')
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