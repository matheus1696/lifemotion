@extends('layouts.guest')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="flex flex-col py-2">
        @csrf

        <!-- Email Address -->
        <x-forms.input id='email' type="email" label='E-mail' placeholder="exemplo@lifemotion.com.br" value="{{old('email')}}" attribute="autofocus required autocomplete='username'"/>

        <!-- Password -->
        <x-forms.input id='password' type="password" label='Senha' placeholder="*********" attribute="required autocomplete='current-password'"/>

        <x-buttons.auth.btn-login />
        
        <div class="flex items-center justify-between gap-3 mt-3">
            <x-buttons.auth.btn-forgot route="{{ route('password.request') }}" />
            <x-buttons.auth.btn-register route="{{ route('register') }}" />
        </div>
    </form>
@endsection