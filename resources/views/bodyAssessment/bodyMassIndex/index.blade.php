@extends('adminlte::page')

@section('title', 'IMC')

@section('content_header')
<h1 class="text-center">Indice de Massa Corporal - IMC</h1>
@stop

@section('content')

  <section class="row">

    <div class="col-lg-9 col-md-8 col-12">
      <div class="p-3 mb-3 bg-white rounded-md">
        <h4 class="py-3 text-lg">Cadastro de Medidas</h4>
        <div>
          <form action="{{route('bmi.store')}}" method="post">
            @csrf
            <div class="flex flex-col items-center md:gap-5 md:flex-row">
              <div class="flex-1 w-full">
                <x-forms.input id="weight" type="number" label="Peso" placeholder="70 kg" :value="old('weight')" step="0.01"/>  
              </div>   
              <div class="flex-1 w-full">
                <x-forms.input id="height" type="number" label="Altura" placeholder="175 cm" :value="old('height')"/>
              </div>
              <div class="flex-1 w-full md:mt-2">
                <x-buttons.btn-block-submit> Adicionar </x-buttons.btn-block-submit>
              </div>
            </div>            
          </form>
        </div>
      </div>
      <div class="p-3 bg-white rounded-md">
        <h4 class="py-3 text-lg">Gráficos</h4>
          @include('bodyAssessment.bodyMassIndex.partials.graphic_bmi')
          @include('bodyAssessment.bodyMassIndex.partials.graphic_weight')
      </div>
    </div>

    <div class="col-lg-3 col-md-4 col-12">
      <div class="p-3 bg-white rounded-md">
        <h4 class="py-3 text-lg">Histórico</h4>
        <div class="overflow-auto" style="max-height: 70vh">
          @foreach ($historical as $historic)
          <div class="card card-teal collapsed-card">
            <div class="card-header">
              <h3 class="text-sm font-weight-bold card-title">{{$historic->created_at->format('d/m/Y')}}</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="card-body" style="display: none;">
              <div class="flex items-center justify-center gap-2 text-sm">
                <div><strong>IMC:</strong> {{$historic->bmi}}</div>
                <div><strong>Altura:</strong> {{$historic->height}}cm</div>
                <div><strong>Peso:</strong> {{$historic->weight}}kg</div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

  </section>
@stop

@section('css')
  <!-- Scripts -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@stop

