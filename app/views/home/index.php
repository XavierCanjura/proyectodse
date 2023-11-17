<div class='row'>
    <div class='col-12' id="chart1"></div>

</div>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>

        function chartRender({categories, data, title, name, container}){
            var options = {
                series: [{
                    name: name,
                    data: data
                }],
                chart: {
                    height: 350,
                    type: 'bar',
                },
                plotOptions: {
                    bar: {
                        borderRadius: 10,
                        dataLabels: {
                        position: 'top', // top, center, bottom
                        },
                    }
                },
                dataLabels: {
                    enabled: true,
                    formatter: function (val) {
                        return val;
                    },
                    offsetY: -20,
                    style: {
                        fontSize: '12px',
                        colors: ["#304758"]
                    }
                },
                
                xaxis: {
                    categories: categories,
                    position: 'bottom',
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    crosshairs: {
                        fill: {
                        type: 'gradient',
                        gradient: {
                            colorFrom: '#D8E3F0',
                            colorTo: '#BED1E6',
                            stops: [0, 100],
                            opacityFrom: 0.4,
                            opacityTo: 0.5,
                        }
                        }
                    },
                    tooltip: {
                        enabled: true,
                    }
                },
                yaxis: {
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false,
                    },
                    labels: {
                        show: false,
                        formatter: function (val) {
                        return val;
                        }
                    }
                
                },
                title: {
                    text: title,
                    floating: true,
                    offsetY: 0,
                    align: 'center',
                    style: {
                        color: '#444'
                    }
                }
            };

            var chart = new ApexCharts(container, options);
            chart.render();
        }

        const chart1 = document.querySelector("#chart1");
        chartRender({
            data: <?php echo json_encode($countUsersByTipoUsuario) ?>,
            categories: <?php  echo json_encode($tipoUsuarioList) ?>,
            title: 'Cantidad de usuarios por tipo de usuario',
            name: "Usuarios",
            container: chart1,
        });

        
</script>