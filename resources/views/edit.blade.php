@extends('layouts.mainlayout')
@section('title','Edit')

@section('content')
<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="container mt-1 mb-5">
        @foreach ($products as $p)
        <form action="/crud/update" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}"><br>
            <div class="mb-3">
              <label for="inputNama" class="form-label">Nama Produk</label>
              <input type="text" class="form-control" id="inputNama" name="product_name" required value="{{ $p->product_name }}">
            </div>
            <div class="mb-3">
                <label for="inputKategori" class="form-label">Kategori</label>
                <select class="form-select" id="inputKategori" name="category_id" required>
                    <option value="1" {{ $p->category_id == 1 ? 'selected' : '' }}>Sports</option>
                    <option value="2" {{ $p->category_id == 2 ? 'selected' : '' }}>Daily</option>
                    <option value="3" {{ $p->category_id == 3 ? 'selected' : '' }}>Accessories</option>
                </select>
            </div>            
            <div class="mb-3">
                <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="inputDeskripsi" name="description" rows="3">{{ $p->description }}</textarea>
              </div>
            <div class="mb-3">
              <label for="inputHarga" class="form-label">Harga</label>
              <input type="number" class="form-control" id="inputHarga" name="price" required value="{{ $p->price }}">
            </div>
            <div class="mb-3">
              <label for="inputStok" class="form-label">Stok</label>
              <input type="number" class="form-control" id="inputStok" name="stock" required value="{{ $p->stock }}">
            </div>
            <div class="mb-3">
                <label for="currentImage">Gambar Saat Ini:</label><br>
                <img src="{{ asset($p->image) }}" alt="Gambar Produk" width="25%">
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
          @endforeach
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection