<x-layouts.guest>
    <form method="POST" action="{{ route('register') }}" class="flex flex-col py-2">
        @csrf

        <!-- Name -->
        <x-forms.input id='name' label='Name' placeholder="Fulano da Silva" value="{{old('name')}}" attribute="autofocus required"/>
        
        <!-- Email Address -->
        <x-forms.input id='email' type="email" label='E-mail' placeholder="exemplo@lifemotion.com.br" value="{{old('email')}}" attribute="required"/>

        <!-- Password -->
        <x-forms.input id='password' type="password" label='Senha' placeholder="********" attribute="required"/>
        
        <!-- Confirm Password -->
        <x-forms.input id='password_confirmation' type="password" label='Confirmar Senha' placeholder="********" attribute="required"/>

        <x-buttons.btn-block-submit>Registrar</x-buttons.btn-block-submit>
    
        <div class="flex items-center justify-between gap-3">
            <x-buttons.btn-link-secondary route="{{ route('password.request') }}">Esqueceu a senha?</x-buttons.btn-link-secondary>
            <x-buttons.btn-link-tertiary route="{{ route('login') }}">Login</x-buttons.btn-link-tertiary>
        </div>
    </form>
</x-layouts.guest>
