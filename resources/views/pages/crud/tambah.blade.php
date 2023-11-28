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
              <input type="text" id="inputNama" name="product_name" class="form-control @error('product_name') is-invalid @enderror" value="{{ old('product_name') }}" autofocus>
              @error('product_name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <!-- Input Kategori -->
            <div class="mb-3">
              <label for="inputKategori" class="form-label">Kategori</label>
              <select class="form-select" id="inputKategori" name="category_id">
                  @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ ucwords($category->category_name) }}</option>
                  @endforeach
              </select>
            </div>
          
          
            <!-- Input Deskripsi -->
            <div class="mb-3">
              <label for="inputDeskripsi" class="form-label">Deskripsi</label>
              <textarea class="form-control @error('description') is-invalid @enderror" id="inputDeskripsi" name="description" rows="3"></textarea>
              @error('description')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <!-- Input Harga -->
            <div class="mb-3">
              <label for="inputHarga" class="form-label">Harga</label>
              <input type="number" class="form-control @error('price') is-invalid @enderror" id="inputHarga" name="price">
              @error('price')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <!-- Input Stok -->
            <div class="mb-3">
              <label for="inputStok" class="form-label">Stok</label>
              <input type="number" class="form-control @error('stock') is-invalid @enderror" id="inputStok" name="stock">
              @error('stock')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <!-- Input Gambar -->
            <div class="mb-5">
              <label for="inputGambar" class="form-label">Unggah Gambar</label>
              <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
              @error('image')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
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