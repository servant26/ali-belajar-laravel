@extends('layouts.mainlayout')
@section('title', 'Column Chart')

@section('content')
    <figure class="highcharts-figure">
        <h3>Column Chart :</h3>
        <div id="container"></div><br>
        <a href="/dashboard/pie" class="btn btn-primary">Lihat Versi Pie Chart</a>
    </figure>
    <script>
        var nama_produk = <?php echo json_encode($data['product_name']); ?>;
        var harga = <?php echo json_encode($data['price']); ?>;
        var stok = <?php echo json_encode($data['stock']); ?>;
        var created_at = <?php echo json_encode($data['created_at']); ?>;
        Highcharts.chart('container', {
        chart: {
            type: 'column',
            backgroundColor: 'rgba(255, 255, 255, 0)', // Ubah latar belakang ke putih atau transparan
            style: {
                color: '#FFFFFF' // Ubah warna teks menjadi putih
            }
        },
        title: {
            text: 'Data Produk',
            style: {
                color: '#FFFFFF' // Ubah warna teks judul menjadi putih
            }
        },
        xAxis: {
            categories: created_at,
            crosshair: true,
            accessibility: {
                description: 'Tanggal Pembuatan Produk'
            },
            labels: {
                style: {
                    color: '#FFFFFF' // Ubah warna label sumbu x menjadi putih
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah',
                style: {
                    color: '#FFFFFF' // Ubah warna teks sumbu y menjadi putih
                }
            },
            labels: {
                style: {
                    color: '#FFFFFF' // Ubah warna label sumbu y menjadi putih
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
            backgroundColor: 'rgba(255, 255, 255, 0.8)', // Ubah latar belakang tooltip menjadi putih transparan
            style: {
                color: '#000000' // Ubah warna teks tooltip menjadi hitam
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Harga',
            data: harga
        }, {
            name: 'Stok',
            data: stok
        }]
    });
</script>
@endsection
