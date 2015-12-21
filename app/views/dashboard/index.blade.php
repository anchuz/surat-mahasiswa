@section('title')
	{{ $title }}
@stop

@section('breadcrumb')
	<li><a href="dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
@stop

@section('asset')
<style type="text/css">
    #textbot {
        width: auto; height: auto;
        padding: 10px;
        margin: auto;
        text-align:center;
        font: 26px Geneva, Arial, Helvetica, sans-serif;
        font-weight: bold;
    }
</style>
@stop

@section('content')	
	<div id="textbot">
		<center>Aplikasi Surat Mahasiswa FMIPA UNESA
			<br>
	</div>
	<div align="center">
		<a href="{{ URL::to('dashboard') }}"><img src="assets/img/PetunjukSurat.png" border="0" ></a><br>
    </div>
@stop