<x-layouts.guest>

    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-3 py-2">
        @csrf

        <!-- Email Address -->
        <x-forms.input id='email' type="email" label='E-mail' placeholder="exemplo@lifemotion.com.br" value="{{old('email')}}" attribute="autofocus required autocomplete='username'"/>

        <!-- Password -->
        <x-forms.input id='password' type="password" label='Senha' placeholder="*********" attribute="required autocomplete='current-password'"/>

        <x-buttons.btn-block-submit>Login</x-buttons.btn-block-submit>
        
        <div class="flex items-center justify-between gap-3">
            <x-buttons.btn-link-secondary route="{{ route('password.request') }}">Esqueceu a senha?</x-buttons.btn-link-secondary>
            <x-buttons.btn-link-tertiary route="{{ route('register') }}">Cadastre-se</x-buttons.btn-link-tertiary>
        </div>
    </form>
    
</x-layouts.guest>