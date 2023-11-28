@extends('layouts.mainlayout')
@section('title','Edit Kategori')

@section('content')
<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="container mt-1 mb-5">
            <form action="/categories/update/{{ $product_categories->id }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="mb-3">
                  <label for="inputCategoryName" class="form-label">Kategori Produk</label>
                  <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="inputCategoryName" name="category_name" required value="{{ $product_categories->category_name }}" autofocus>
                  @error('category_name')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="d-grid gap-2 d-md-block">
                  <a class="btn btn-danger" href="/categories" role="button">Kembali</a>
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </form>          
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection