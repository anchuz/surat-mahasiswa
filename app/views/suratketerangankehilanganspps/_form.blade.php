{{ Form::open(array('url' => route('surat_ket_kehilangan_spp.store'), 'method' => 'post', 'id' => 'ketkehilanganspps')) }}
	<div class="col-lg-6">
    	<div class="box box-info">
    		<div class="box-header">
            	<h3 class="box-title">Informasi Surat</h3>
        	</div>	
        	<div class="box-body">
				{{-- <div class="form-group">
					{{ Form::label('nomor_surat', 'Nomor Surat') }}
					<p class="help-block">e.g.: 0001</p>
					{{ Form::text('nomor_surat', null, array('class' => 'form-control','placeholder'=>'Masukkan Nomor Surat')) }}
				</div> --}}
				<div class="form-group">
					{{ Form::label('kepada', 'Tujuan Surat') }}
					<p class="help-block">e.g.: Kepala Kepolisian Sektor Tuban </p>
					{{ Form::text('kepada', null, array('class' => 'form-control','placeholder'=>'Masukkan Tujuan Surat')) }}
				</div>
				<div class="form-group">
					{{ Form::label('kota', 'Kota Tujuan') }}
					<p class="help-block">e.g.: Tuban</p>
					{{ Form::text('kota', null, array('class' => 'form-control','placeholder'=>'Masukkan Kota Tujuan Surat')) }}
				</div>
				<div class="form-group">
					{{ Form::label('keterangan', 'Kehilangan SPP (Semenster)') }}
					<p class="help-block">e.g.: I - III (menggunakan angka romawi)</p>
					{{ Form::text('keterangan', null, array('class' => 'form-control','placeholder'=>'Masukkan semester SPP yang hilang')) }}
				</div>
			</div>
		</div>
		<div class="box box-info">
    		<div class="box-header">
            	<h3 class="box-title">Persetujuan</h3>
        	</div>
        	<div class="box-body">
				<div class="form-group">
					{{ Form::select('persetujuan', array(''=>'')+Jabatan::lists('nama','id'), null, array(
						'id'=>'persetujuan',
						'placeholder' => "Pilih Pejabat",
						'class' => 'form-control input-sm')) }}
				</div>
       		</div>
    	</div>
    </div>
	<div class="col-lg-6">
    	<div class="box box-info">
    		<div class="box-header">
            	<h3 class="box-title">Biodata Mahasiswa</h3>
        	</div>
        	<div class="box-body">
				<div class="form-group">
					{{ Form::label('nama', 'Nama') }}
					{{ Form::text('nama', null, array('class' => 'form-control','placeholder'=>'Masukkan Nama')) }}
				</div>
				<div class="form-group">
					{{ Form::label('nim', 'NIM') }}
					{{ Form::text('nim', null, array('class' => 'form-control','placeholder'=>'Masukkan NIM')) }}
				</div>
				<div class="form-group">
					{{ Form::label('prodi', 'Prodi') }}
					{{ Form::select('prodi', array(''=>'')+Prodi::lists('prodi','id'), null, array(
						'id'=>'prodi',
						'placeholder' => "Pilih Prodi",
						'class' => 'form-control input-sm')) }}
				</div>
				<div class="form-group">
					{{ Form::label('semester', 'Semester') }}
					{{ Form::select('semester', array(
						'gasal'	=> 'Gasal',
						'genap'	=> 'Genap',
						), null, array(
						'id'=>'semester',
						'placeholder' => "Pilih Semester",
						'class' => 'form-control input-sm')) }}
				</div>
				<div class="form-group">
					{{ Form::label('ajaran', 'Tahun Ajaran') }}
					<p class="help-block">e.g.: 2014/2015</p>
					{{ Form::text('ajaran', null, array('class' => 'form-control','placeholder'=>'Masukkan Tahun Ajaran')) }}
				</div>
       		</div>
    	</div>
    	<div class="box-footer">
    		<input type="submit" value="BUAT SURAT" class="btn btn-primary" id="buatSurat"/>
    		{{-- {{Form::submit('BUAT SURAT', array('onclick'=>'proses()','class'=>'btn btn-primary', 'style'=>'text-align:center;'))}} --}}
		</div>
	</div>
</div>
{{ Form::close() }}