@extends('adminlte::page')

@section('title', 'IMC')

@section('content_header')
    <h1 class="text-center">Indice de Massa Corporal - IMC</h1>
@stop

@section('content')

  <section class="row">

      <div class="col-9">
        <h4 class="py-3 text-lg">Gráficos</h4>
        <div>
          <div class="card card-indigo collapsed-card">
            <div class="card-header">
              <h3 class="card-title">Historico IMC</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <div class="chartjs-size-monitor">
                  <div class="chartjs-size-monitor-expand">
                    <div class=""></div>
                  </div>
                  <div class="chartjs-size-monitor-shrink">
                    <div class=""></div>
                  </div>
                </div>
                <canvas id="chartBMI" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 324px;" width="648" height="500" class="chartjs-render-monitor"></canvas>
              </div>
            </div>          
          </div>
        </div>

        <div>
          <div class="card card-indigo collapsed-card">
            <div class="card-header">
              <h3 class="card-title">Historico Peso</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <div class="chartjs-size-monitor">
                  <div class="chartjs-size-monitor-expand">
                    <div class=""></div>
                  </div>
                  <div class="chartjs-size-monitor-shrink">
                    <div class=""></div>
                  </div>
                </div>
                <canvas id="chartWeight" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 324px;" width="648" height="500" class="chartjs-render-monitor"></canvas>
              </div>
            </div>          
          </div>
        </div>
      </div>

      <div class="col-3">
        <h4 class="py-3 text-lg">Histórico</h4>
        <div class="overflow-auto" style="max-height: 80vh">
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
                <div><strong>IMC:</strong> {{$historic->bmi}}</div>
                <div><strong>Altura:</strong> {{$historic->height}}</div>
                <div><strong>Peso:</strong> {{$historic->weight}}</div>
              </div>        
            </div> 
          @endforeach
        </div>       
      </div>
    
  </section>
    
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
  <script>
    const chartBMI = document.getElementById('chartBMI');

    new Chart(chartBMI, {
      data: {
        datasets: [{
            type: 'line',
            label: 'IMC Normal',
            data: {!! json_encode($bmiDefault) !!},
            borderColor: 'rgb(127, 127, 127, 0.2)',            
            backgroundColor: 'rgb(127, 127, 127, 0.2)',
        },{
            type: 'line',
            label: 'IMC',
            data: {!! json_encode($historical->pluck('bmi')->toArray()) !!},
            borderColor: '#6169EF',
            backgroundColor: '#6169EF',
        }],
        labels: {!! json_encode($time) !!},
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

  <script>
    const chartWeight = document.getElementById('chartWeight');

    new Chart(chartWeight, {
      data: {
          datasets: [{
              type: 'line',
              label: 'Peso',
              data: {!! json_encode($historical->pluck('weight')->toArray()) !!},
              borderColor: '#17a2b8',
              backgroundColor: '#17a2b8',
          }],
        labels: {!! json_encode($time) !!},
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

@stop

@section('css')
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
@stop

