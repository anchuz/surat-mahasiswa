<!DOCTYPE html>
<html>
   <head>
        <meta charset="UTF-8">
        <title>@yield('title')|Surat Mahasiswa FMIPA UNESA</title>        
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        {{HTML::style("assets/css/bootstrap.min.css")}}        
        <!-- font Awesome -->
        {{HTML::style("assets/css/font-awesome.min.css")}}        
        <!-- Ionicons -->
        {{HTML::style("assets/css/ionicons.min.css")}}        
        <!-- Theme style -->
        {{HTML::style("assets/css/AdminLTE.css")}}        
        <link rel="stylesheet" href="{{ asset('packages/uikit/css/uikit.almost-flat.min.css')}}" /> 
        @yield('asset')
    </head>
    <body class="skin-blue fixed">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="{{ URL::to('dashboard') }}" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Surat Mahasiswa
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                {{-- <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="user user-menu">
                            <a href="{{ URL::to('logout') }}">Logout</a>
                        </li>                        
                    </ul>
                </div> --}}
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">                                                        
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder-open"></i> <span>Permohonan Ijin Studi Lapangan</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::to('surat_ijin_studi_lapangan_indv') }}"><i class="fa fa-user"></i>Individu</a></li>
                                <li><a href="{{ URL::to('surat_ijin_studi_lapangan_group') }}"><i class="fa fa-users"></i>Kelompok</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder-open"></i> <span>Permohonan Kunjungan</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::to('surat_kunjungan_indv') }}"><i class="fa fa-user"></i>Individu</a></li>
                                <li><a href="{{ URL::to('comingsoon') }}"><i class="fa fa-users"></i>Kelompok</a></li>
                                <li><a href="{{ URL::to('comingsoon') }}"><i class="fa fa-group"></i>Rombongan</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder-open"></i> <span>Permohonan Magang</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::to('comingsoon') }}"><i class="fa fa-user"></i>Individu</a></li>
                                <li><a href="{{ URL::to('comingsoon') }}"><i class="fa fa-users"></i>Kelompok</a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="{{ URL::to('surat_membeli_bahan') }}">
                                <i class="fa fa-file"></i> <span>Permohonan Membeli bahan kimia</span>
                            </a>
                        </li> 
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder-open"></i> <span>Permohonan Observasi</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::to('surat_penelitian') }}"><i class="fa fa-user"></i>Penelitian</a></li>
                                <li><a href="{{ URL::to('surat_ambil_data') }}"><i class="fa fa-users"></i>Mengambil Data</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder-open"></i> <span>Permohonan PKL</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::to('comingsoon') }}"><i class="fa fa-user"></i>Individu</a></li>
                                <li><a href="{{ URL::to('comingsoon') }}"><i class="fa fa-users"></i>Kelompok</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder-open"></i> <span>Praktikum Lapangan</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::to('comingsoon') }}"><i class="fa fa-user"></i>Individu</a></li>
                                <li><a href="{{ URL::to('comingsoon') }}"><i class="fa fa-users"></i>Kelompok</a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="{{ URL::to('surat_uji_pendahuluan') }}">
                                <i class="fa fa-file"></i> <span>Permohonan Uji Pendahuluan</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ URL::to('comingsoon') }}">
                                <i class="fa fa-file"></i> <span>Permohonan Uji Sampel</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        @yield('title')
                        @yield('title-button')
                    </h1>
                    <ol class="breadcrumb">
                        @yield('breadcrumb')                        
                    </ol>                    
                </section>

                <!-- Main content -->
                <section class="content">
                    @include('layouts.partial.alert')
                    @include('layouts.partial.validation')
                    @yield('content')
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.0.2 -->
        {{HTML::script('assets/js/jquery.min.js')}}        
        <!-- jQuery UI 1.10.3 -->
        {{HTML::script('assets/js/jquery-ui-1.10.3.min.js')}}        
        <!-- Bootstrap -->
        {{HTML::script('assets/js/bootstrap.min.js')}}        
        <!-- AdminLTE App -->
        {{HTML::script('assets/js/AdminLTE/app.js')}}                        
        @yield('script')
    </body>
</html>
