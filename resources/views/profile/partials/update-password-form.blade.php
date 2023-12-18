<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Alterar Senha
        </h2>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-forms.input id="current_password" label="Senha Antiga:" :value="old('current_password')" attribute="autocomplete='current-password'" />
        </div>

        <div>
            <x-forms.input id="password" label="Senha Antiga:" :value="old('password')" attribute="autocomplete='password'" />
        </div>

        <div>
            <x-forms.input id="password_confirmation" label="Confirma Senha:" :value="old('password_confirmation')" attribute="autocomplete='new-password'" />
        </div>

        <div>
            <x-buttons.btn-block-submit>Alterar Senha</x-buttons.btn-block-submit>
        </div>
    </form>
</section>
