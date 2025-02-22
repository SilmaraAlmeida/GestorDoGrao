
// CHART JS
new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    data: {
      labels: ["Janeiro", "Fevereiro", "Março", "Abril"],
      datasets: [
        {
          label: "Faturamento",
          backgroundColor: "#3e95cd",
          data: [133,221,783,2478]
        }, {
          label: "Perda",
          backgroundColor: "#8e5ea2",
          data: [408,547,675,734]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Population growth (millions)'
      }
    }
});
