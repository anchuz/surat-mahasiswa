@extends('layouts.login')

@section('content')
<br>
<br>
<div align="center">
	<img src="assets/img/surat_mahasiswa.jpg" align="center"> 
</div>
<div class="form-box" id="login-box">
    @include('layouts.partial.alert')
    <div class="header">Masuk</div>
    {{ Form::open(array('url' => 'authenticate')) }}
		<div class="body bg-gray">
			<div class="form-group">
				{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Username'))}}
			</div>
			<div class="form-group">
				{{ Form::password('password', array('class'=>'form-control','placeholder'=>'Password')) }}
			</div>
			<div class="box-footer">
				{{Form::submit('Masuk', array('class'=>'btn btn-primary'))}}                        
			</div>
		</div>
	{{form::close()}}
    </div>

    <div class="margin text-center">
        <span>Created By <a href="#">Cyber Campus UNESA - INSEO</a></span>
    </div>
</div>
@stop