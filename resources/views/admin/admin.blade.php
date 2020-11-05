<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title> SYSTEM </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset ('bower_components/bootstrap/dist/css/bootstrap.min.css') }} ">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('bower_components/font-awesome/css/font-awesome.min.css') }} ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset ('bower_components/Ionicons/css/ionicons.min.css') }} ">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/admin-lte/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/admin-lte/dist/css/skins/skin-blue.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset ('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

  {{-- global css --}}
  <link rel="stylesheet" href="{{ asset ('/css/global.css') }}">
 
  <!-- jQuery 3 -->
  <script src="{{ asset ('bower_components/jquery/dist/jquery.min.js') }} "></script>

  {{-- select 2 --}}
  <link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset ('/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('/dist/css/skins/_all-skins.min.css') }}">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Navbar -->
      @include('admin/header')

    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      @include('admin/sidebar')
    </aside>
    <!-- /.sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Software
          <small>Nexura</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <!--------------------------
        | Your Page Content Here |
        -------------------------->

        @yield('content')

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <footer class="main-footer">
      @include('admin/footer')
    </footer>

    <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->


  <!-- Bootstrap 3.3.7 -->
  <script src="{{ asset ('bower_components/bootstrap/dist/js/bootstrap.min.js') }} "></script>
  <!-- DataTables -->
  <script src="{{ asset ('bower_components/datatables.net/js/jquery.dataTables.min.js') }} "></script>
  <script src="{{ asset ('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('/bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>
  <!-- usuarios js -->
  <script src="{{ asset('/js/global.js') }}"></script>
  {{-- select2 --}}
  <script src="{{ asset ('bower_components/select2/dist/js/select2.full.min.js') }} "></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>

  <!-- App scripts -->
  @stack('scripts')

  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>