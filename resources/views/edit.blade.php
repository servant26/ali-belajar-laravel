@extends('layouts.mainlayout')
@section('title','Edit')

@section('content')
<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="container mt-1 mb-5">
        <form action="/crud/update/{{ $products->id }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="mb-3">
              <label for="inputNama" class="form-label">Nama Produk</label>
              <input type="text" class="form-control" id="inputNama" name="product_name" required value="{{ $products->product_name }}">
            </div>
            <div class="mb-3">
                <label for="inputKategori" class="form-label">Kategori</label>
                <select class="form-select" id="inputKategori" name="category_id" required>
                    <option value="1" {{ $products->category_id == 1 ? 'selected' : '' }}>Sports</option>
                    <option value="2" {{ $products->category_id == 2 ? 'selected' : '' }}>Daily</option>
                    <option value="3" {{ $products->category_id == 3 ? 'selected' : '' }}>Accessories</option>
                </select>
            </div>            
            <div class="mb-3">
                <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="inputDeskripsi" name="description" rows="3">{{ $products->description }}</textarea>
              </div>
            <div class="mb-3">
              <label for="inputHarga" class="form-label">Harga</label>
              <input type="number" class="form-control" id="inputHarga" name="price" required value="{{ $products->price }}">
            </div>
            <div class="mb-3">
              <label for="inputStok" class="form-label">Stok</label>
              <input type="number" class="form-control" id="inputStok" name="stock" required value="{{ $products->stock }}">
            </div>
            <div class="mb-3">
                <label for="currentImage">Gambar Saat Ini:</label><br>
                <img src="{{ asset($products->image) }}" alt="Gambar Produk" width="25%">
            </div>
            <div class="mb-3">
              <label for="inputGambar" class="form-label">Unggah Gambar Baru (Maksimal 2MB)</label>
              <input type="file" class="form-control" id="image" name="image" accept="image/*">
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