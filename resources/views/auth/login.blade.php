@extends('layouts.logres')
@section('title','Login')

@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ route('login') }}" class="h1"><b>Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Masuk untuk memulai aksimu</p>
      <form action="{{ route('login-proses') }}" method="post">
        @csrf
        @error('email')
            <small>{{ $message }}</small>
        @enderror
        <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('password')
            <small>{{ $message }}</small>
        @enderror
        <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <br>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Daftar sebagai pengguna baru</a>
      </p>
      <br>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
@endsection