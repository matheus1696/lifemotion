<div class="card card-indigo">
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
        <canvas id="chartWeight"
        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 324px;"
        width="648" height="500" class="chartjs-render-monitor"></canvas>
    </div>
  </div>
</div>

<script>
  const chartWeight = document.getElementById('chartWeight');

  new Chart(chartWeight, {
    data: {
        datasets: [{
            type: 'line',
            label: 'Peso',
            data: {!! json_encode($graphic['weight']) !!},
            borderColor: '#6169EF',
            backgroundColor: '#6169EF',
        }],
      labels: {!! json_encode($graphic['time']) !!},
    },
    options: {
      scales: {
        y: {
          beginAtZero: false
        }
      }
    }
  });
</script>