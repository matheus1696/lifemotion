@extends('adminlte::page')

@section('title', 'IMC')

@section('content_header')
  <h1 class="py-3 text-center">Indice de Massa Corporal - IMC</h1>
@stop

@section('content')

  <section class="row">

    <div class="mb-3 col-lg-9 col-md-8 col-12">
      <div class="p-4 mb-3 bg-white rounded-md shadow-lg">
        <h4 class="text-lg">Cadastro de Medidas</h4>        
        @include('body.bodyMassIndex.partials.form_create')
      </div>
      
      <div class="p-4 bg-white rounded-md shadow-lg">
        <h4 class="text-lg">Gráficos</h4>
          @include('body.bodyMassIndex.partials.graphic_bmi')
          @include('body.bodyMassIndex.partials.graphic_weight')
      </div>
    </div>

    <div class="mb-3 col-lg-3 col-md-4 col-12">
      <div class="p-4 bg-white rounded-md shadow-lg">
        <h4 class="text-lg">Histórico</h4>
        <div class="overflow-auto" style="max-height: 70vh">
          @foreach ($historical as $historic)
          <div class="card card-teal collapsed-card">
            <div class="card-header">
              <h3 class="text-sm font-weight-bold card-title">{{(new DateTime($historic->date))->format('d/m/Y');}}</h3>
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

