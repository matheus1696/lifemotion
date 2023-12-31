<form action="{{route('bmi.store')}}" method="post" class="flex flex-col flex-wrap items-center xl:gap-3 xl:flex-row">
  @csrf
  <div class="flex-1 w-full">
    <x-forms.input id="date" type="date" label="Data" :value="old('date', now()->format('Y-m-d'))"
      attribute="required" />
  </div>
  <div class="flex-1 w-full">
    <x-forms.input id="weight" type="number" label="Peso"
      :placeholder="$graphic['height'] ? end($graphic['weight']).' kg' : '70 kg'" :value="old('weight')" step="0.01"
      attribute="required" max="300" />
  </div>
  <div class="flex-1 w-full">
    <x-forms.input id="height" type="number" label="Altura (CM)" placeholder="175 cm"
      :value="old('height',end($graphic['height']))" attribute="required" max="250" />
  </div>
  <div class="flex-1 w-full xl:mt-4">
    <x-buttons.btn-block-submit> Adicionar </x-buttons.btn-block-submit>
  </div>
</form>