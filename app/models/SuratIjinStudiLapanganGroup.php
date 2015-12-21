<?php

class SuratIjinStudiLapanganGroup extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'nomor_surat'	=> 'required',
		'kepada'		=> 'required',
		// 'alamat'		=> 'required',
		'kota'			=> 'required',
		'mata_kuliah'	=> 'required',
		'pembimbing'	=> 'required',
		'jadwal'		=> 'required',
		'persetujuan'	=> 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['nomor_surat','jumlah_lamp','kepada','alamat','kota','mata_kuliah','pembimbing','jadwal','persetujuan'];

	public function Dataprodi()
	{
		return $this->hasOne('Prodi','id','prodi');
	}

	public function Datapersetujuan()
	{
		return $this->hasOne('Jabatan','id','persetujuan');
	}

	public function Datamahasiswa()
	{
		return $this->hasMany('Mahasiswa','kode','kode');
	}
}
