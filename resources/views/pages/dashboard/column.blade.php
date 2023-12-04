@extends('layouts.mainlayout')
@section('title', 'Column Chart')

@section('content')
    <figure class="highcharts-figure m-3">
        <h3>Column Chart :</h3>
        <div id="container"></div><br>
        <a href="/dashboard/pie" class="btn btn-primary">Lihat Versi Pie Chart</a>
    </figure>
    <script>
        var categories = <?php echo json_encode($productsData->keys()->toArray()); ?>;
        var totalProducts = <?php echo json_encode($productsData->pluck('total_products')->toArray()); ?>;
        var totalPrices = <?php echo json_encode($productsData->pluck('total_price')->toArray()); ?>;
        var totalStocks = <?php echo json_encode($productsData->pluck('total_stock')->toArray()); ?>;
        
        Highcharts.chart('container', {
            legend: {
                itemStyle: {
                    color: '#FFFFFF'
                }
            },

            chart: {
                type: 'column',
                backgroundColor: 'rgba(255, 255, 255, 0)', 
                style: {
                    color: '#FFFFFF' 
                }
            },
            title: {
                text: 'Data Produk per Kategori',
                style: {
                    color: '#FFFFFF' 
                }
            },
            xAxis: {
                categories: categories,
                crosshair: true,
                accessibility: {
                    description: 'Kategori Produk'
                },
                labels: {
                    style: {
                        color: '#FFFFFF' 
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah',
                    style: {
                        color: '#FFFFFF'
                    }
                },
                labels: {
                    style: {
                        color: '#FFFFFF'
                    }
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true,
                backgroundColor: 'rgba(255, 255, 255, 0.8)',
                style: {
                    color: '#000000' 
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Jumlah Produk',
                data: totalProducts,
                dataLabels: {
                    enabled: true,
                    color: '#FFFFFF'
                }
            }, {
                name: 'Total Harga',
                data: totalPrices,
                dataLabels: {
                    enabled: true,
                    color: '#FFFFFF' 
                }
            }, {
                name: 'Total Stok',
                data: totalStocks,
                dataLabels: {
                    enabled: true,
                    color: '#FFFFFF' 
                }
            }]

        });
    </script>
@endsection
