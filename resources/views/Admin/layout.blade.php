<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
    <link rel="stylesheet" href="{{asset ('assets/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Ionicons -->

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
    <link rel="stylesheet"
        href="{{asset ('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{asset ('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <!-- JQVMap -->
    <!-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> -->
    <link rel="stylesheet" href="{{asset ('assets/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->
    <link rel="stylesheet" href="{{asset ('assets/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <!-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
    <link rel="stylesheet" href="{{asset ('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <!-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> -->
    <link rel="stylesheet" href="{{asset ('assets/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <!-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css"> -->
    <link rel="stylesheet" href="{{asset ('assets/plugins/summernote/summernote-bs4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset ('assets/dist/img/AdminLTELogo')}}.png" alt="AdminLTELogo" height="60" width="60">
    
  </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src=" {{asset ('assets/dist/img/AdminLTELogo')}}.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset ('assets/dist/img/user2-160x160')}}.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>

                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/Admin/view" class="nav-link">
                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                <i class="fa-solid fa-user px-2"></i>
                                <p>
                                    Users

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="/Admin/post" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Posts
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/Admin/category" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Category
                                </p>
                            </a>

                        </li>
                        <!--  -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->

        <!-- /.content-wrapper -->
        <div id="container">
            @section('container')
            @show
        </div>
        <!-- <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="#">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer> -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{ { asset('assets/plugins/jquery/jquery.min.js') } }"></script>
    <!-- <script src="plugins/jquery/jquery.min.js"></script> -->
    <!-- jQuery UI 1.11.4 -->
    <script src="{ { asset('assets/plugins/jquery-ui/jquery-ui.min.js') } }"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{ { asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') } }"></script>
    <!-- ChartJS -->
    <script src="{ { asset('assets/plugins/chart.js/Chart.min.js') } }"></script>
    <!-- Sparkline -->
    <script src="{ { asset('assets/plugins/sparklines/sparkline.js') } }"></script>
    <!-- JQVMap -->
    <script src="{ { asset('assets/plugins/jqvmap/jquery.vmap.min.js') } }"></script>
    <script src="{ { asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') } }"></script>
    <!-- jQuery Knob Chart -->
    <script src="{ { asset('assets/plugins/jquery-knob/jquery.knob.min.js') } }"></script>
    <!-- daterangepicker -->
    <script src="{ { asset('assets/plugins/moment/moment.min.js') } }"></script>
    <script src="{ { asset('assets/plugins/daterangepicker/daterangepicker.js') } }"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{ { asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') } }">
    </script>
    <!-- Summernote -->
    <script src="{ { asset('assets/plugins/summernote/summernote-bs4.min.js') } }"></script>
    <!-- overlayScrollbars -->
    <script src="{ { asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') } }"></script>
    <!-- AdminLTE App -->
    <script src="{ { asset('assets/dist/js/adminlte.js') } }"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{ { asset('assets/dist/js/demo.js') } }"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{ { asset('assets/dist/js/pages/dashboard.js') } }"></script>
</body>

</html>