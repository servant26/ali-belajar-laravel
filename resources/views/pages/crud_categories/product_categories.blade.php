@extends('layouts.mainlayout')
@section('title','Kategori Produk')

@section('content')
@if(session('success'))
<div id="notification" class="alert alert-success">
    {{ session('success') }}
</div>
<script>
    setTimeout(function() {
        document.getElementById('notification').style.opacity = '0';
        setTimeout(function() {
            document.getElementById('notification').style.display = 'none';
        }, 500); 
    }, 2000); 
</script>
@endif
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Kategori Produk</h1>
          <a class="btn btn-primary mt-4" href="/categories/tambah" role="button">Tambah</a>
          <form class="d-flex mt-3" role="search" action="/categories/cari" method="get">
            <input class="form-control me-2" type="text" name="cari" placeholder="Cari kategori produk..." aria-label="Cari kategori produk..." value="{{ old('cari') }}">
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
        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Dibuat Pada</th>
                    <th>Diubah Pada</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                @php
                    $no = ($product_categories->currentPage() - 1) * $product_categories->perPage() + 1;
                @endphp
                @if($product_categories->count() > 0)
                    @foreach ($product_categories as $p)
                    <tbody>
                        <td>{{ $no++ }}</td>
                        <td>{{ ucwords($p->category_name) }}</td>                         
                        <td>{{ $p->created_at }}</td>
                        <td>{{ $p->updated_at }}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-warning" href="/categories/edit/{{ $p->id }}" role="button">Edit</a>
                                <a class="btn btn-danger" href="/categories/hapus/{{ $p->id }}" role="button" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                            </div>          
                        </td>
                    </tbody>
                    @endforeach
                @else
                    <td colspan="5">Data tidak ditemukan</td>
                @endif
            </table>
        </div>
      </div>
      <!-- Awal Pagination --> 
      <div class="d-flex justify-content-center">
        <ul class="pagination">
            @if ($product_categories->onFirstPage())
                <li class="page-item disabled"><span class="page-link">Previous</span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $product_categories->previousPageUrl() }}">Previous</a></li>
            @endif
        
            @for ($i = max(1, $product_categories->currentPage() - 1); $i <= min($product_categories->lastPage(), $product_categories->currentPage() + 1); $i++)
                <li class="page-item {{ $i == $product_categories->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $product_categories->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            
            @if ($product_categories->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $product_categories->nextPageUrl() }}">Next</a></li>
            @else
                <li class="page-item disabled"><span class="page-link">Next</span></li>
            @endif
        </ul>
      </div>
      <!-- Akhir Pagination -->
</section>
@endsection
