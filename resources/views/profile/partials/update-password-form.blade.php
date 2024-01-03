<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Alterar Senha
        </h2>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf @method('put')

            <x-forms.input type="password" id="current_password" label="Senha Atual:" placeholder="********" attribute="autocomplete='current-password'" />
            <x-forms.input type="password" id="password" label="Nova Senha:" placeholder="********" attribute="autocomplete='password'" />
            <x-forms.input type="password" id="password_confirmation" label="Confirma Nova Senha:" placeholder="********" attribute="autocomplete='new-password'" />

        <div>
            <x-buttons.btn-block-submit>Alterar Senha</x-buttons.btn-block-submit>
        </div>
    </form>
</section>
