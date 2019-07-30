<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kuace Store</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
     <link  rel="stylesheet" href="{{ asset('js/dataTables.bootstrap.min.css') }}">
   </head>

   <body class="hold-transition skin-blue sidebar-mini">

    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-lg"><b>KUACE</b>STORE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        </nav>
      </header>
      <!-- =============================================== -->
      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">

            <li class="header">MAIN NAVIGATION</li>

            <li class="treeview">
              <a href="{{ route('kategori.index') }}">
                <i class="fa fa-home"></i>
                <span>Kategori Barang</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ route('produk.index') }}">
                <i class="fa fa-th-list"></i>
                <span>Produk</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ route('pelanggan.index') }}">
                <i class="fa fa-th-list"></i>
                <span>Pelanggan</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ route('penjualan.index') }}">
                <i class="fa fa-print"></i>
                <span>Penjualan</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ route('detail.index') }}">
                <i class="fa fa-print"></i>
                <span>Detail Dari Penjualan</span>
              </a>
            </li>
            <li class="header">SETTINGS</li>
            <li><a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
           </a>
         </li>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </ul>
    </section>
    </aside>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <small>Selamat Datang Administrator!</small>
        </h1>
      </section>
      <section class="content">
        <!-- Default box -->
        <div class="box">
          <div class="container py-4">
            @yield('content')
          </div>
        </div>
      </section>
    </div>
  </div>
  </body>
  </html>
