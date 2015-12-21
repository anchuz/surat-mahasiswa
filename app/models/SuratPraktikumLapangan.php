<?php

class SuratPraktikumLapangan extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'nomor_surat'	=> 'required',
		'kepada'		=> 'required',
		// 'alamat'		=> 'required',
		'kota'			=> 'required',
		'mata_kuliah'	=> 'required',
		'jurusan'		=> 'required',
		'angkatan'		=> 'required',
		'hari'			=> 'required',
		'tanggal'		=> 'required',
		'pukul'			=> 'required',
		'dosen'			=> 'required',
		'asdos'			=> 'required',
		'mhs'			=> 'required',
		'persetujuan'	=> 'required',
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['nomor_surat','jumlah_lamp','kepada','alamat','kota','mata_kuliah','jurusan','angkatan','hari','tanggal','pukul','dosen','asdos','mhs','persetujuan'];

	public function Datajurusan()
	{
		return $this->hasOne('Jurusan','id','jurusan');
	}

	public function Datapersetujuan()
	{
		return $this->hasOne('Jabatan','id','persetujuan');
	}
}
