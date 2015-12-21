{{ Form::open(array('url' => route('surat_prak_lap.store'), 'method' => 'post', 'id' => 'praklaps')) }}
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
					{{ Form::label('mata_kuliah', 'Mata Kuliah') }}
					{{ Form::text('mata_kuliah', null, array('class' => 'form-control','placeholder'=>'Masukkan Mata Kuliah')) }}
				</div>
				<div class="form-group">
					{{ Form::label('jurusan', 'Jurusan') }}
					{{ Form::select('jurusan', array(''=>'')+Jurusan::lists('jurusan','id'), null, array(
						'id'=>'jurusan',
						'placeholder' => "Pilih Jurusan",
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
    </div>
	<div class="col-lg-6">
    	<div class="box box-info">
    		<div class="box-header">
            	<h3 class="box-title">Jadwal Pelaksanaan</h3>
        	</div>
        	<div class="box-body">
        		<div class="form-group">
					{{ Form::label('hari', 'Hari') }}
					{{ Form::select('hari', array(
						'Senin'		=> 'Senin',
						'Selasa'	=> 'Selasa',
						'Rabu'		=> 'Rabu',
						'Kamis'		=> 'Kamis',
						'Jumat'		=> 'Jumat',
						'Sabtu'		=> 'Sabtu',
						'Minggu'	=> 'Minggu',
						), null, array(
						'id'=>'hari',
						'placeholder' => "Pilih Angkatan",
						'class' => 'form-control input-sm')) }}
				</div>
				<div class="form-group">
					{{ Form::label('tanggal', 'Tanggal') }}
					<p class="help-block">e.g.: 3 Maret 2015</p>
					{{ Form::text('tanggal', null, array('class' => 'form-control','placeholder'=>'Masukkan Tanggal')) }}
				</div>
				<div class="form-group">
					{{ Form::label('pukul', 'Pukul') }}
					<p class="help-block">e.g.: 09.00 - 16.00</p>
					<div class="input-group">
						{{ Form::text('pukul', null, array('class' => 'form-control', 'data-inputmask' => '"mask": "99.99 - 99.99"')) }}
						<div class="input-group-addon">
	                        <i>WIB</i>
	                    </div>
					</div>
				</div>				
       		</div>
    	</div>
    	<div class="box box-info">
    		<div class="box-header">
            	<h3 class="box-title">Peserta Praktikum Lapangan (jumlah)</h3>
        	</div>
        	<div class="box-body">
				<div class="form-group">
					{{ Form::label('dosen', 'Jumlah Dosen') }}
					<div class="input-group">
						{{ Form::text('dosen', null, array('class' => 'form-control','placeholder'=>'Masukkan Jumlah Dosen')) }}
						<div class="input-group-addon">
	                        <i>orang</i>
	                    </div>
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('asdos', 'Jumlah Asisten Dosen') }}
					<div class="input-group">
					{{ Form::text('asdos', null, array('class' => 'form-control','placeholder'=>'Masukkan Jumlah Asisten Dosen')) }}
						<div class="input-group-addon">
	                        <i>orang</i>
	                    </div>
	                </div>
				</div>
				<div class="form-group">
					{{ Form::label('mhs', 'Jumlah Mahasiswa') }}
					<div class="input-group">
						{{ Form::text('mhs', null, array('class' => 'form-control','placeholder'=>'Masukkan Jumlah Mahasiswa')) }}
						<div class="input-group-addon">
	                        <i>orang</i>
	                    </div>
	                </div>
				</div>
       		</div>
    	</div>
    	<div class="box box-info">
    		<div class="box-header">
            	<h3 class="box-title">Persetujuan</h3>
        	</div>
        	<div class="box-body">
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