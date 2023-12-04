@extends('layouts.mainlayout')
@section('title','Daftar Pengguna')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Pengguna</h1>
          <form class="d-flex mt-3" role="search" action="/user/cariuser" method="get">
            <input class="form-control me-2" type="text" name="cari" placeholder="Cari user..." aria-label="Cari user..." value="{{ old('cari') }}">
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Mendaftar</th>
                </tr>
                </thead>
                @php
                    $no = ($user->currentPage() - 1) * $user->perPage() + 1;
                @endphp
                @if($user->count() > 0)
                    @foreach ($user as $u)
                        <tbody>
                            <td>{{ $no++ }}</td>
                            <td>{{ ucwords($u->name) }}</td>                       
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->created_at }}</td>
                        </tbody>
                    @endforeach
                @else
                    <td colspan="8">Data tidak ditemukan</td>
                @endif
            </table>
        </div>
      </div>
      <!-- Awal Pagination --> 
      <div class="d-flex justify-content-center">
        <ul class="pagination">
            @if ($user->onFirstPage())
                <li class="page-item disabled"><span class="page-link">Previous</span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $user->previousPageUrl() }}">Previous</a></li>
            @endif
        
            @for ($i = max(1, $user->currentPage() - 1); $i <= min($user->lastPage(), $user->currentPage() + 1); $i++)
                <li class="page-item {{ $i == $user->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $user->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            
            @if ($user->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $user->nextPageUrl() }}">Next</a></li>
            @else
                <li class="page-item disabled"><span class="page-link">Next</span></li>
            @endif
        </ul>
      </div>
      <!-- Akhir Pagination -->
</section>
@endsection
