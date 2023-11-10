@extends('layouts.mainlayout')
@section('title','CRUD')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Produk</h1>
          <a class="btn btn-primary mt-4" href="/crud/tambah" role="button">Tambah</a>
          <form class="d-flex mt-3" role="search" action="dashboard.php" method="get">
            <input class="form-control me-2" type="search" name="kata_cari" placeholder="Cari materi..." aria-label="Cari materi..." value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>">
            <button class="btn btn-primary" type="submit">Cari</button>
          </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <!-- =========================================================== -->
        <h5 class="mt-1 mb-2"></h5>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            @foreach ($products as $p)
            <tbody>
                <td>{{ $no++ }}</td>
                <td>{{ $p->product_name }}</td>
                <td>{{ $p->category_name }}</td>
                <td>{{ $p->description }}</td>
                <td>{{ $p->price }}</td>
                <td>{{ $p->stock }}</td>
                <td>
                    <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-warning" href="/crud/edit/{{ $p->id }}" role="button">Edit</a>
                        <a class="btn btn-danger" href="/crud/hapus/{{ $p->id }}" role="button">Hapus</a>
                    </div>          
                </td>
            </tbody>
            @endforeach
        </table>
      </div>
</section>
@endsection