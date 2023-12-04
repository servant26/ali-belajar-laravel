@extends('layouts.logres')
@section('title','Register')

@section('content')
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ route('register') }}" class="h1"><b>Register</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Daftar sebagai pengguna baru</p>

      <form action="{{ route('register-proses') }}" method="post">
        @csrf
        @error('name')
          <small>{{ $message }}</small>
        @enderror
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nama lengkap" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>
        </div>
        @error('email')
          <small>{{ $message }}</small>
        @enderror
        <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email" name="email">
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
        <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <br>
      <a href="{{ route('login') }}" class="text-center">Saya sudah terdaftar</a>
      <br><br>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
@endsection