@section('title')
	{{ $title }}
@stop

@section('breadcrumb')
	<li><a href="dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">@yield('title')</li>
@stop

@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<section class="content">
    <div class="error-page">
        <h2 class="headline text-info"> :)</h2>
        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> Oops! Coming Soon.</h3>
            <p>
                Halaman akan segera dibuat.
                Mungkin, Anda dapat kembali ke <a href="{{ URL::to('dashboard') }}">Dashboard</a>
            </p>
        </div><!-- /.error-content -->
    </div><!-- /.error-page -->
</section><!-- /.content -->
@stop