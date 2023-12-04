@extends('layouts.mainlayout')
@section('title', 'Dashboard')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <h2>Daftar Data :</h2><br>
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h1 class="nav-icon fa fa-cart-plus"></h1>
                  <h3>{{ $totalProducts }}</h3>
                  <h5>Jumlah Produk</h5>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="/crud" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-md-6 col-12">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h1 class="nav-icon fa fa-book"></h1>
                  <h3>{{ $totalCategories }}<sup style="font-size: 20px"></sup></h3>
                  <h5>Jumlah Kategori</h5>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/categories" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-md-6 col-12">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h1 class="nav-icon fa fa-credit-card"></h1>
                  <h3>Rp {{ $totalPrice }}</h3>
                  <h5>Total Harga</h5>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="/crud" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-md-6 col-12">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h1 class="nav-icon fas fa-chart-pie"></h1>
                  <h3>{{ $totalStock }}</h3>
                  <h5>Jumlah Stok</h5>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="/crud" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
@endsection
