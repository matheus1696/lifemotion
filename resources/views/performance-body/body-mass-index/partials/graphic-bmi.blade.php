<x-accordion title="Histórico de IMC" open="true">
  <canvas id="chartBMI" class="px-3 py-2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 324px;" class="chartjs-render-monitor"></canvas>
</x-accordion>

<script>
  const chartBMI = document.getElementById('chartBMI');

  new Chart(chartBMI, {
    data: {
      datasets: [{
          type: 'line',
          label: 'IMC Normal',
          data: {!! json_encode($graphic['bmiDefault']) !!},
          borderColor: 'rgb(127, 127, 127, 0.3)',            
          backgroundColor: 'rgb(127, 127, 127, 0.3)',
      },{
          type: 'line',
          label: 'IMC',
          data: {!! json_encode($graphic['bmi']) !!},
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