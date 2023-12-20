<section>
    <header>
        <h2 class="text-lg font-medium">
            Informação do Perfil
        </h2>
    </header>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('put')

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
                    <option @if ($user->sex === "M") selected @endif value="M">Masculino</option>                    
                    <option @if ($user->sex === "F") selected @endif value="F">Feminino</option>
                </x-forms.select>
            </div>
        </div>

        <div class="">
            <x-buttons.btn-block-submit>Atualizar Cadastro</x-buttons.btn-block-submit>
        </div>
    </form>
</section>
