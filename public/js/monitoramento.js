// CHART JS
fetch("/portalProdutor/monitoramento")
.then((response) => {
    return response.json();
})
.then((dadosChartsJS) => {
    console.log(dadosChartsJS)
    createChart(dadosChartsJS, 'bar');
});

function createChart(chartData, type) {
    new Chart(document.getElementById("bar-chart-grouped"), {
        type: 'bar',
        data: {
            labels: chartData.map(row => row.dadosChartsJS),
            datasets: [
                {
                    label: "Faturamento",
                    backgroundColor: "#2d6a4f",
                    data: chartData.map(row => row.faturamento)
                },
                {
                    label: "Perda",
                    backgroundColor: "#40916c",
                    data: [408, 547, 675, 734]
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
}