<x-accordion title="Histórico de Altura">
  <canvas id="chartHeight" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 324px;" width="648" height="500" class="chartjs-render-monitor"></canvas>
</x-accordion>

<script>
  const chartHeight = document.getElementById('chartHeight');

  new Chart(chartHeight, {
    data: {
        datasets: [{
            type: 'line',
            label: 'Altura',
            data: {!! json_encode($graphic['height']) !!},
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