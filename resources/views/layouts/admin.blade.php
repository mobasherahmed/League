<!doctype html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('storage/images/logo.png') }}">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

  </head>
  <body>
    @section('header')
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

    <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

    <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="{{url('/messages')}}">Open Messages</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <?php
            if(isset(Auth::user()->name)){
              $link = url('user');
            }
            else{
              $link = url('/login');
            }
            ?>
            <a class="dropdown-item" href="{{ $link }}">
              @if(isset(Auth::user()->name))
              {{Auth::user()->name}}
              @else
              Login
              @endif
            </a>
            <a class="dropdown-item" href="#">Test</a>
            
            <a class="dropdown-item" href="{{ url('/logout') }}" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </li>
      </ul>
    </nav>
    @show

    

    @section('sidebar')
    <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/leagues')}}">
          <i class="fas fa-globe"></i>
          <span>Leagues</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('/teams')}}">
          <i class="fas fa-id-card-alt"></i>
          <span>Teams</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('/stadiums')}}">
          <i class="fas fa-ethernet"></i>
          <span>Stadiums</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('/matches')}}">
          <i class="fas fa-gamepad"></i>
          <span>Matches</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('/links')}}">
          <i class="fas fa-link"></i>
          <span>Links</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('/albums')}}">
          <i class="fas fa-newspaper"></i>
          <span>Albums</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{url('/company')}}">
          <i class="fas fa-info"></i>
          <span>Company Details</span></a>
      </li>

    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">@yield('title')</li>
        </ol>

        @yield('content')


      </div>
      <!-- /.container-fluid -->

      

    </div>
    <!-- /.content-wrapper -->

  </div>
    @show

    


    @section('footer')
    <!-- Sticky Footer -->
    <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>
    @show

    @section('js')
      <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

        <!-- Page level plugin JavaScript-->
        <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/sb-admin.min.js') }}"></script>

        <!-- Demo scripts for this page-->
        <script src="{{ asset('js/datatables-demo.js') }}"></script>
    @show


    </body>
</html>