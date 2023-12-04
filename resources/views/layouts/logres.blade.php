<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <link href="{{ asset('bt\css\bootstrap.min.css') }}" rel="stylesheet">
  <script src="{{ asset('bt\js\bootstrap.bundle.min.js') }}"></script>
</head>
<body class="hold-transition login-page">
    @yield('content')
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if($message = Session::get('success'))
<script>
    Swal.fire({
        icon: "success",
        text: ('{{ $message }}'),
        });
 </script>
@endif
@if($message = Session::get('failed'))
<script>
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: ('{{ $message }}'),
        });
 </script>
@endif
</body>
</html>
