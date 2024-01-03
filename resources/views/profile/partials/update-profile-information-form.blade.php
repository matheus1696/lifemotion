<section>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf @method('put')

        <x-forms.input id="name" label="Nome:" :value="old('name', $user->name)" attribute="required autofocus autocomplete='name'" />
        <x-forms.input id="disabled" label="Email:" :value="$user->email" attribute="disabled" />
        
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">
            <div class="lg:col-span-6">
                <x-forms.input id="birth" type="date" label="Data de Nascimento:" :value="old('birth', $user->birth)" />
            </div>    
            <div class="lg:col-span-6">
                <x-forms.select id="sex" label="Sexo:" :value="old('sex', $user->sex)">
                    <option @if ($user->sex === "M") selected @endif value="M">Masculino</option>                    
                    <option @if ($user->sex === "F") selected @endif value="F">Feminino</option>
                </x-forms.select>
            </div>
        </div>

        <x-buttons.btn-block-submit>Atualizar Cadastro</x-buttons.btn-block-submit>
    </form>
</section>
