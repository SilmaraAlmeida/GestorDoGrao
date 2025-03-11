// CHART JS
new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    data: {
        labels: ["Janeiro", "Fevereiro", "Março", "Abril"],
        datasets: [
            {
                label: "Faturamento",
                backgroundColor: "#2d6a4f",
                data: [133, 221, 783, 2478]
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
