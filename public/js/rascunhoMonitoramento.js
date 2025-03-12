if (document.getElementById("bar-chart-grouped")) {
    fetch("/js/testCharts.php")
    .then((response) => response.json())
    .then((data) => {
        createChart(data.data, data.totalFaturado);
    });
}

function createChart(chartData, totalFaturado) {
    console.log(chartData.map(row => row.data_registro));

    new Chart(document.getElementById("bar-chart-grouped"), {
        type: 'bar',
        data: {
            labels: chartData.map(row => row.data_registro),
            datasets: [
                {
                    label: "Valor Faturado",
                    backgroundColor: "#2d6a4f",
                    data: chartData.map(row => row.custo_insumo)
                },
                {
                    label: "Perda",
                    backgroundColor: "#40916c",
                    data: new Array(chartData.length).fill(totalFaturado)
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Monitoramento de Custos e Perda'
            }
        }
    });
}
