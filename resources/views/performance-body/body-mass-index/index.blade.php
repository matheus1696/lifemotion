@extends('adminlte::page')

@section('title', 'IMC')

@section('content_header')
  <x-titles.content-header title="Indice de Massa Corporal - IMC"/>
@stop

@section('content')
  <section class="grid grid-cols-1 gap-4 my-3 lg:grid-cols-12">
    <div class="col-span-1 lg:col-span-7 xl:col-span-9">
      
      <!-- Measurement Registration Form -->
      <x-card title="Cadastro de Medidas">        
        @include('performance-body.body-mass-index.partials.create-bmi')
      </x-card>
      
      <!-- Graphics -->
      <x-card title="Gráficos">
        @include('performance-body.body-mass-index.partials.graphic-bmi')
        @include('performance-body.body-mass-index.partials.graphic-weight')
      </x-card>      
    </div>

    <div class="col-span-1 lg:col-span-5 xl:col-span-3">

      <!-- Registration History -->
      <x-card title="Histórico">
        @include('performance-body.body-mass-index.partials.historic')
      </x-card>
    </div>

  </section>
@stop

@section('css')
  <!-- Scripts -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://kit.fontawesome.com/04fdd6b99f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@stop

