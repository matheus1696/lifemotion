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
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://kit.fontawesome.com/04fdd6b99f.js" crossorigin="anonymous"></script>
@stop