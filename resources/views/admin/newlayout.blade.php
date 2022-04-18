
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>House Of Account</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('/')}}plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  @yield('head')
  <link rel="stylesheet" href="{{asset('/')}}dist/css/adminlte.min.css">
  
  <livewire:styles />

</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
@include('admin.newnav')
@include('admin.sidebar')
@yield('content')
<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="#">House Of Account</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0-rc
    </div>
  </footer>
</div>
<!-- ./wrapper -->
<livewire:scripts />
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('/')}}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/')}}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/')}}dist/js/adminlte.min.js"></script>
@yield('js')
</body>
</html>