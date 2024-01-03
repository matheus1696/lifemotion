@extends('adminlte::page')

@section('title', 'Perfil')

@section('content')

    <section class="flex flex-col items-center justify-center gap-5 p-5">
        <div class="w-full lg:w-2/3">
            <x-card title="Dados do Usuário">
                @include('profile.partials.update-profile-information-form')
            </x-card>
        </div>
        <div class="w-full lg:w-2/3">
            <x-card title="Alteração de Senha">
                @include('profile.partials.update-password-form')
            </x-card>
        </div>
    </section>

@stop

@section('css')
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
@stop