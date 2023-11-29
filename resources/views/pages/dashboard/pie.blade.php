@extends('layouts.mainlayout')
@section('title', 'Pie Chart')

@section('content')
<figure class="highcharts-figure">
    <h3>Pie Chart :</h3>
    <div id="container"></div><br>
    <a href="/dashboard/column" class="btn btn-primary">Lihat Versi Column Chart</a>
</figure>
<script>
    var nama_produk = <?php echo json_encode($data['product_name']); ?>;
    var stok = <?php echo json_encode($data['stock']); ?>;
    document.addEventListener('DOMContentLoaded', function () {
        Highcharts.chart('container', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Jumlah Stok Sepatu',
                style: {
                    color: '#ffffff' 
                }
            },
            series: [{
                name: 'Jumlah Stok',
                colorByPoint: true,
                data: stok.map((stock, index) => ({
                    name: nama_produk[index],
                    y: stock
                }))
            }],
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>',
                style: {
                    color: '#ffffff'
                }
            },
            plotOptions: {
                pie: {
                    dataLabels: {
                        color: '#ffffff',
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y}'
                    }
                }
            }
        });
    });
</script>
@endsection
