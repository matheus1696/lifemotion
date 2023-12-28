@extends('layouts.guest')

@section('content')
    <div class="mb-4 text-sm text-justify text-gray-600 dark:text-gray-400">
        <p>Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail cadastrado que enviaremos por e-mail um link de redefinição de senha, onde permitirá que você escolha uma nova senha de acesso.</p>
    </div>

    <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-3 py-2">
        @csrf

        <!-- Email Address -->
        <x-forms.input id='email' type="email" label='E-mail' placeholder="exemplo@lifemotion.com.br" value="{{old('email')}}" attribute="autofocus required"/>

        <x-buttons.auth.btn-forgot />

        <div class="flex items-center justify-between gap-3">
            <x-buttons.auth.btn-login route="{{ route('login') }}" />
            <x-buttons.auth.btn-register route="{{ route('register') }}" />
        </div>
        
    </form>
@endsection
