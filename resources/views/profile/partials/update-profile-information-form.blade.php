<section>
    <header>
        <h2 class="text-lg font-medium">
            Informação do Perfil
        </h2>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-forms.input id="name" label="Nome:" :value="old('name', $user->name)" attribute="required autofocus autocomplete='name'" />
        </div>

        <div>
            <x-forms.input id="disabled" label="Email:" :value="$user->email" attribute="disabled" />
        </div>

        <div class="row">
            <div class="col-lg-6 col-12">
                <x-forms.input id="birth" type="date" label="Data de Nascimento:" :value="old('birth', $user->birth)" />
            </div>
    
            <div class="col-lg-6 col-12">
                <x-forms.select id="sex" label="Sexo:" :value="old('sex', $user->sex)">
                    <option value="Masculino">Masculino</option>                    
                    <option value="Feminino">Feminino</option>
                </x-forms.select>
            </div>
        </div>

        <div class="">
            <x-buttons.btn-block-submit>Atualizar Cadastro</x-buttons.btn-block-submit>
        </div>
    </form>
</section>
