<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>@yield('title')|Surat Mahasiswa FMIPA UNESA</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="AdminLTE/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="AdminLTE/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="AdminLTE/bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="AdminLTE/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="AdminLTE/dist/css/skins/skin-red.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('packages/uikit/css/uikit.almost-flat.min.css')}}" /> 
    @yield('asset')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-red sidebar-mini fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="{{ URL::to('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>S</b>MH</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Surat </b>Mahasiswa</span>
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
            <li>
                <a href="{{ URL::to('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="header">SURAT PERMOHONAN</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o text-green"></i> <span>Studi Lapangan</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('surat_ijin_studi_lapangan_indv') }}"><i class="fa fa-user text-green"></i>Individu</a>
                    <li><a href="{{ URL::to('surat_ijin_studi_lapangan_group') }}"><i class="fa fa-users  text-green"></i>Kelompok</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ URL::to('surat_kartu_anggota') }}">
                    <i class="fa fa-file-o text-green"></i> <span>Kartu Anggota</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o text-green"></i> <span>Kunjungan</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a> 
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('surat_kunjungan_indv') }}"><i class="fa fa-user  text-green"></i>Individu</a></li>
                    <li><a href="{{ URL::to('surat_kunjungan_group') }}"><i class="fa fa-users text-green"></i>Kelompok</a></li>
                    {{-- <li><a href="{{ URL::to('comingsoon') }}"><i class="fa fa-group"></i>Rombongan</a></li> --}}
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o text-green"></i> <span>Magang</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('surat_magang_indv') }}"><i class="fa fa-user text-green"></i>Individu</a></li>
                    <li><a href="{{ URL::to('surat_magang_group') }}"><i class="fa fa-users text-green"></i>Kelompok</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ URL::to('surat_membeli_bahan') }}">
                    <i class="fa fa-file-o  text-green"></i> <span>Membeli bahan</span>
                </a>
            </li> 
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o text-green"></i> <span>Observasi</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('surat_penelitian') }}"><i class="fa fa-user text-green"></i>Penelitian</a></li>
                    <li><a href="{{ URL::to('surat_ambil_data') }}"><i class="fa fa-users text-green"></i>Mengambil Data</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o text-green"></i> <span>PKL</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('surat_pkl_indv') }}"><i class="fa fa-user text-green"></i>Individu</a></li>
                    <li><a href="{{ URL::to('surat_pkl_group') }}"><i class="fa fa-users text-green"></i>Kelompok</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ URL::to('surat_pra_penelitian') }}">
                    <i class="fa fa-file-o text-green"></i> <span>Pra Penelitian</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('surat_prak_lap') }}">
                    <i class="fa fa-file-o text-green"></i> <span>Praktikum Lapangan</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('surat_uji_pendahuluan') }}">
                    <i class="fa fa-file-o text-green"></i> <span>Uji Pendahuluan</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('surat_uji_sampel') }}">
                    <i class="fa fa-file-o text-green"></i> <span>Uji Sampel</span>
                </a>
            </li>
          </ul>
          <ul class="sidebar-menu">
            <li class="header">SURAT KETERANGAN</li>
            <li>
                <a href="{{ URL::to('surat_ket_aktif') }}">
                    <i class="fa fa-file-o text-green"></i> <span>Aktif Kuliah</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o text-green"></i> <span>Kehilangan</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('surat_ket_kehilangan') }}"><i class="fa fa-file-o text-green"></i>KTM</a></li>
                    <li><a href="{{ URL::to('surat_ket_kehilangan_spp') }}"><i class="fa fa-file-o text-green"></i>SPP</a></li>
                </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Generate Surat Mahasiswa FMIPA UNESA
                @yield('title-button')
            </h1>
            <ol class="breadcrumb">
                @yield('breadcrumb')
            </ol>                    
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">@yield('title')</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              </div>
              @include('layouts.partial.alert')
              @include('layouts.partial.validation')
            </div>
            <div class="box-body">
              @yield('content')
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Created By Cyber Campus UNESA - inseo</b>
        </div>
        <strong>&copy; 2015 <a href="http://fmipa.unesa.ac"id>FMIPA | Universitas Negeri Surabaya</a>.</strong> All rights reserved.
      </footer>

    <!-- jQuery 2.1.4 -->
    <script src="AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="AdminLTE/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='AdminLTE/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="AdminLTE/dist/js/app.min.js" type="text/javascript"></script>
    
    <!-- Demo -->
    <script src="AdminLTE/dist/js/demo.js" type="text/javascript"></script>
    @yield('script')
  </body>
</html>