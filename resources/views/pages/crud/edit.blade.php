@extends('layouts.mainlayout')
@section('title','Edit')

@section('content')
<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="container mt-1 mb-5">
            <form action="/crud/update/{{ $product->id }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="mb-3">
                  <label for="inputNama" class="form-label">Nama Produk</label>
                  <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="inputNama" name="product_name" required value="{{ $product->product_name }}" autofocus>
                  @error('product_name')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="inputKategori" class="form-label">Kategori</label>
                <select class="form-select" id="inputKategori" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->category_name) }}
                        </option>
                    @endforeach
                </select>
              </div>                                  
              <div class="mb-3">
                  <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                  <textarea class="form-control @error('description') is-invalid @enderror" id="inputDeskripsi" name="description" rows="3">{{ $product->description }}</textarea>
                  @error('description')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="inputHarga" class="form-label">Harga</label>
                  <input type="number" class="form-control @error('price') is-invalid @enderror" id="inputHarga" name="price" required value="{{ $product->price }}">
                  @error('price')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="inputStok" class="form-label">Stok</label>
                  <input type="number" class="form-control @error('stock') is-invalid @enderror" id="inputStok" name="stock" required value="{{ $product->stock }}">
                  @error('stock')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="currentImage">Gambar Saat Ini:</label><br>
                  <img src="{{ asset($product->image) }}" alt="Gambar Produk" width="25%">
              </div>
              <div class="mb-3">
                  <label for="inputGambar" class="form-label">Unggah Gambar Baru (Maksimal 2MB)</label>
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