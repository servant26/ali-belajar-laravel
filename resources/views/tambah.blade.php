@extends('layouts.mainlayout')
@section('title','Tambah')

@section('content')
<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="container mt-1 mb-5">
        <form action="/crud/add" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="inputNama" class="form-label">Nama Produk</label>
              <input type="text" class="form-control" id="inputNama" name="product_name" required>
            </div>
            <div class="mb-3">
                <label for="inputKategori" class="form-label">Kategori</label>
                <select class="form-select" id="inputKategori" name="category_id" required>
                    <option value="1">Sports</option>
                    <option value="2">Daily</option>
                    <option value="3">Accessories</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="inputDeskripsi" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="inputDeskripsi" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="inputHarga" class="form-label">Harga</label>
              <input type="number" class="form-control" id="inputHarga" name="price" required>
            </div>
            <div class="mb-3">
              <label for="inputStok" class="form-label">Stok</label>
              <input type="number" class="form-control" id="inputStok" name="stock" required>
            </div>
            <div class="mb-5">
              <label for="inputGambar" class="form-label">Unggah Gambar</label>
              <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <div class="d-grid gap-2 d-md-block">
              <a class="btn btn-danger" href="/crud" role="button">Kembali</a>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection