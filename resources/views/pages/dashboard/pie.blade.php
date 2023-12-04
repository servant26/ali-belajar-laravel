@extends('layouts.mainlayout')
@section('title', 'Pie Chart')

@section('content')
<figure class="highcharts-figure m-3">
    <h3>Pie Chart :</h3>
    <div id="container"></div><br>
    <a href="/dashboard/column" class="btn btn-primary">Lihat Versi Column Chart</a>
</figure>
<script>
    var category_names = <?php echo json_encode($data['category_names']); ?>;
    var total_produk = <?php echo json_encode($data['total_produk']); ?>;
    var total_harga = <?php echo json_encode($data['total_harga']); ?>;
    var total_stok = <?php echo json_encode($data['total_stok']); ?>;
    
    document.addEventListener('DOMContentLoaded', function () {
        Highcharts.chart('container', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Informasi Produk per Kategori',
                style: {
                    color: '#000000'
                }
            },
            series: [{
                name: 'Jumlah Produk',
                colorByPoint: true,
                data: category_names.map((name, index) => ({
                    name: name,
                    y: total_produk[index],
                    harga: total_harga[index],
                    stok: total_stok[index]
                }))
            }],
            tooltip: {
                pointFormat: '<span style="color:{point.color}">\u25CF</span> {series.name}: <b>{point.y}</b><br/>' +
                    'Total Harga: <b>{point.harga}</b><br/>' +
                    'Total Stok: <b>{point.stok}</b>',
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
