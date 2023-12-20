<div>
    <form action="{{route('bmi.store')}}" method="post">
      @csrf
      <div class="flex flex-col flex-wrap items-center lg:gap-5 lg:flex-row">
        <div class="flex-1 w-full">
          <x-forms.input id="date" type="date" label="Data" :value="old('date', now()->format('Y-m-d'))"/>
        </div>
        <div class="flex-1 w-full">
          <x-forms.input id="weight" type="number" label="Peso" placeholder="70 kg" :value="old('weight')" step="0.01"/>
        </div>
        <div class="flex-1 w-full">
          <x-forms.input id="height" type="number" label="Altura" placeholder="175 cm" :value="old('height',end($graphic['height']))"/>
        </div>
        <div class="flex-1 w-full md:mt-4">
          <x-buttons.btn-block-submit> Adicionar </x-buttons.btn-block-submit>
        </div>
      </div>
    </form>
  </div>