<x-layouts.guest>
    <div class="mb-4 text-sm text-justify text-gray-600 dark:text-gray-400">
        <p>Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail cadastrado que enviaremos por e-mail um link de redefinição de senha, onde permitirá que você escolha uma nova senha de acesso.</p>
    </div>

    <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-3 py-2">
        @csrf

        <!-- Email Address -->
        <x-forms.input id='email' type="email" label='E-mail' placeholder="exemplo@lifemotion.com.br" value="{{old('email')}}" attribute="autofocus required"/>

        <x-buttons.btn-block-submit>Enviar email de recuperação</x-buttons.btn-block-submit>

        <div class="flex items-center justify-between gap-3">
            <x-buttons.btn-link-secondary route="{{ route('login') }}">Login</x-buttons.btn-link-secondary>
            <x-buttons.btn-link-tertiary route="{{ route('register') }}">Cadastre-se</x-buttons.btn-link-tertiary>
        </div>
        
    </form>
</x-layouts.guest>
