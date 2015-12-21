{{ Form::open(array('url' => route('surat_kartu_anggota.store'), 'method' => 'post', 'id' => 'kartuanggotas')) }}
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
					<p class="help-block">e.g.: Kepala Perpustakaan Daerah Surabaya </p>
					{{ Form::text('kepada', null, array('class' => 'form-control','placeholder'=>'Masukkan Tujuan Surat')) }}
				</div>
				<div class="form-group">
					{{ Form::label('alamat', 'Alamat Tujuan') }}
					<p class="help-block">e.g.: Jalan Pahlawan no. 36</p>
					{{ Form::text('alamat', null, array('class' => 'form-control','placeholder'=>'Masukkan Alamat Surat')) }}
				</div>
				<div class="form-group">
					{{ Form::label('kota', 'Kota Tujuan') }}
					<p class="help-block">e.g.: Surabaya</p>
					{{ Form::text('kota', null, array('class' => 'form-control','placeholder'=>'Masukkan Kota Tujuan Surat')) }}
				</div>
				{{-- <div class="form-group">
					{{ Form::label('keterangan', 'keterangan') }}
					<p class="help-block">melakukan studi lapangan pembuatan bioetanol</p>
					{{ Form::text('keterangan', null, array('class' => 'form-control','placeholder'=>'Masukkan Keterangan')) }}
				</div> --}}
				<div class="form-group">
					{{ Form::label('jadwal', 'Jadwal Pelaksanaan') }}
					<p class="help-block">e.g.: Maret 2015</p>
					{{ Form::text('jadwal', null, array('class' => 'form-control','placeholder'=>'Masukkan Jadwal Pelaksanaan')) }}
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
					{{ Form::label('angkatan', 'Angkatan') }}
					{{ Form::selectyear('angkatan', 2005, 2020, 2015, array(
						'id'=>'angkatan',
						'placeholder' => "Pilih Angkatan",
						'class' => 'form-control input-sm')) }}
				</div>
       		</div>
    	</div>
    	<div class="box box-info">
    		<div class="box-header">
            	<h3 class="box-title">Informasi Akademik</h3>
        	</div>
        	<div class="box-body">
				<div class="form-group">
					{{ Form::label('mata_kuliah', 'Dalam Rangka') }}
					{{ Form::select('mata_kuliah', array(
						'pengusunan skripsi'	=> 'Penyusunan Skripsi',
						'tugas mata kuliah'		=> 'Tugas Mata Kuliah',
						), null, array(
						'id'=>'mata_kuliah',
						'placeholder' => "Pilih Angkatan",
						'class' => 'form-control input-sm')) }}
				</div>
				<div class="form-group">
					{{ Form::label('pembimbing', 'Pembimbing') }}
					{{ Form::text('pembimbing', null, array('class' => 'form-control','placeholder'=>'Masukkan Pembimbing')) }}
				</div>
				<div class="form-group">
					{{ Form::label('persetujuan', 'Persetujuan') }}
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