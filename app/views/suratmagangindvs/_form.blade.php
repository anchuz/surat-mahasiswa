{{ Form::open(array('url' => route('surat_magang_indv.store'), 'method' => 'post', 'id' => 'magangindvs')) }}
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
					{{ Form::label('jumlah_lamp', 'Jumlah Lampiran') }}
					<p class="help-block text-red">Kosongi apabila tidak ada lampiran</p>
					{{ Form::text('jumlah_lamp', null, array('class' => 'form-control','placeholder'=>'Masukkan Jumlah Lampiran')) }}
				</div>
				<div class="form-group">
					{{ Form::label('kepada', 'Tujuan Surat') }}
					<p class="help-block">e.g.: Pimpinan  PT. Maju Jaya </p>
					{{ Form::text('kepada', null, array('class' => 'form-control','placeholder'=>'Masukkan Tujuan Surat')) }}
				</div>
				<div class="form-group">
					{{ Form::label('alamat', 'Alamat Tujuan') }}
					<p class="help-block">e.g.: Jalan Raya Gedeg Kec. Gedeg</p>
					{{ Form::text('alamat', null, array('class' => 'form-control','placeholder'=>'Masukkan Alamat Surat')) }}
				</div>
				<div class="form-group">
					{{ Form::label('kota', 'Kota Tujuan') }}
					<p class="help-block">e.g.: Mojokerto</p>
					{{ Form::text('kota', null, array('class' => 'form-control','placeholder'=>'Masukkan Kota Tujuan Surat')) }}
				</div>
				{{-- <div class="form-group">
					{{ Form::label('keterangan', 'keterangan') }}
					<p class="help-block">melakukan studi lapangan pembuatan bioetanol</p>
					{{ Form::text('keterangan', null, array('class' => 'form-control','placeholder'=>'Masukkan Keterangan')) }}
				</div> --}}
				<div class="form-group">
					{{ Form::label('jadwal', 'Jadwal Pelaksanaan') }}
					<p class="help-block">e.g.: Maret - April 2015</p>
					{{ Form::text('jadwal', null, array('class' => 'form-control','placeholder'=>'Masukkan Jadwal Pelaksanaan')) }}
				</div>
				<div class="form-group">
					{{ Form::label('tembusan', 'Tembusan') }}
					<p class="help-block text-red">Isi apabila diperlukan</p>
					{{ Form::text('tembusan', null, array('class' => 'form-control','placeholder'=>'Masukkan Tembusan')) }}
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
    	<div class="box-footer">
    		<input type="submit" value="BUAT SURAT" class="btn btn-primary" id="buatSurat"/>
    		{{-- {{Form::submit('BUAT SURAT', array('onclick'=>'proses()','class'=>'btn btn-primary', 'style'=>'text-align:center;'))}} --}}
		</div>
	</div>
</div>
{{ Form::close() }}