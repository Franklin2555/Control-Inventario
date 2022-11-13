Highcharts.chart('GraficasPorDia', {
    chart: {
    type: 'pie',
    backgroundColor: '#2B2B2C',
    options3d: {
        enabled: true,
        alpha: 50
    }
    },
    title: {
        text: 'Gráfico de Ventas',
    style: {
        color: '#FFF',
    }
    },
    subtitle: {
        text: 'Monitoreo de ventas diarias',
        style: {
        color: '#FFF',
    }
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'cantidad',
        data: <?= $data?>,
    }]
});