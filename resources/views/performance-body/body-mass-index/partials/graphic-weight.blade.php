<x-accordion title="Histórico de Peso" open="true">
  <canvas id="chartWeight" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 324px;" width="648" height="500" class="chartjs-render-monitor"></canvas>
</x-accordion>

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