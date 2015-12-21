{{ Form::open(array('url' => route('surat_kunjungan_group.store'), 'method' => 'post', 'id' => 'kunjungangroups')) }}
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
					<p class="help-block">e.g.: Pimpinan  PT. Perkebunan Nusantara X (Persero) </p>
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
				<div class="form-group">
					{{ Form::label('jadwal', 'Jadwal Pelaksanaan') }}
					<p class="help-block">e.g.: Maret 2015</p>
					{{ Form::text('jadwal', null, array('class' => 'form-control','placeholder'=>'Masukkan Jadwal Pelaksanaan')) }}
				</div>
			</div>
		</div>
    	<div class="box box-info">
    		<div class="box-header">
            	<h3 class="box-title">Informasi Akademik</h3>
        	</div>
        	<div class="box-body">
				<div class="form-group">
					{{ Form::label('mata_kuliah', 'Mata Kuliah') }}
					{{ Form::text('mata_kuliah', null, array('class' => 'form-control','placeholder'=>'Masukkan Mata Kuliah')) }}
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
    </div>
	<div class="col-lg-6">
		<div class="box box-info" style:"overflow: scroll;">
    		<div class="box-header">
            	<h3 class="box-title">Biodata Mahasiswa</h3>
        	</div>
        	<div style="margin-left:10px;">
        		{{ Form::label('klik', 'Tombol untuk menambahkan Mahasiswa') }}<br>
        		<input type="button" value="Tambah Mahasiswa" class="btn btn-success add_field_button"/>
        		<p class="help-block text-red">Maksimal 6 Mahasiswa</p>
        	</div>
        	<div class="input_fields_wrap">
			    
			</div>
			<div class="form-group" id="prodi_list" hidden>
				{{ Form::select('prodi', array(''=>'')+Prodi::lists('prodi','id'), null, array(
					'name' => 'myprodi[]',
					'placeholder' => "Pilih Prodi",
					'class' => 'form-control input-sm prodi_list')) }}
			</div>
			<div class="box-body table-responsive">
				
			</div><!-- /.box-body -->
    	</div>
    	<div class="box-footer">
    		<input type="submit" value="BUAT SURAT" class="btn btn-primary" id="buatSurat"/>
		</div>
	</div>
</div>
{{ Form::close() }}