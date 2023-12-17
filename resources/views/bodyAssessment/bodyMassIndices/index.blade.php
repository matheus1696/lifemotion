@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Indíce de Massa Corporal - IMC</h1>
@stop

@section('plugins.Chartjs', true)

@section('content')

<div>
    <canvas id="chartBMI"></canvas>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
    const ctx = document.getElementById('chartBMI');
  
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: {!! json_encode($data) !!},
        datasets: [{
          label: 'IMC',
          data: {!! json_encode($bmi) !!},
          borderWidth: 2,
          backgroundColor: 'rgba(20, 184, 166,0.5)',
          pointBackgroundColor: 'rgba(20, 184, 166)',
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

    <ul>
        @foreach ($historical as $historic)
            <li><strong>IMC:</strong> {{$historic->bmi}}</li>
            <li><strong>Usuário:</strong> {{$historic->User->name}}</li>
        @endforeach
    </ul>

@stop

