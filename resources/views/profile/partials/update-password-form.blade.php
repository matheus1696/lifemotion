<form method="post" action="{{ route('password.update') }}">
    @csrf @method('put')

    <x-forms.input type="password" id="current_password" label="Senha Atual:" placeholder="********" attribute="autocomplete='current-password'" />
    <x-forms.input type="password" id="password" label="Nova Senha:" placeholder="********" attribute="autocomplete='password'" />
    <x-forms.input type="password" id="password_confirmation" label="Confirma Nova Senha:" placeholder="********" attribute="autocomplete='new-password'" />

    <x-buttons.btn-block-submit>Alterar Senha</x-buttons.btn-block-submit>
</form>
