if (document.getElementById("bar-chart-grouped-one") && document.getElementById("bar-chart-grouped-two")) {
    fetch("/js/testCharts.php")
    .then((response) => response.json())
    .then((data) => {
        createChartOne(data.data);
        
        createChartTwo(data.totalFaturado);
    })
    .catch((error) => {
        console.error("Erro ao carregar dados", error);
    })
}

function createChartOne(resultados) {
    console.log("Totais Gastos:", resultados);

    new Chart(document.getElementById("bar-chart-grouped-one"), {
        type: 'bar',
        data: {
            labels: resultados.map((_, index) => `Registro ${index + 1}`),
            datasets: [
                {
                    label: "Perdas",
                    backgroundColor: "#004d28",
                    data: resultados,
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Monitoramento de Custos e Perda',
            },
            scales: {
                y: {
                    beginAtZero: true,
                }
            }
        }
    });
}

function createChartTwo(resultadosSecondQuery, totalFaturado) {
    console.log("Totais Faturados:", resultadosSecondQuery);

    new Chart(document.getElementById('bar-chart-grouped-two'), {
        type: 'bar',
        data: {
            labels: resultadosSecondQuery.map((_, index) => `Registro ${index + 1}`),
            datasets: [
                {
                    label: "Faturamento",
                    backgroundColor: "#40916c",
                    data: resultadosSecondQuery
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Monitoramento de Faturamentos e Ganhos',
            },
            scales: {
                y: {
                    beginAtZero: true,
                }
            }
        }
    })
}