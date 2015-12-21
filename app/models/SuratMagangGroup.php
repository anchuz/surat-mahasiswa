<?php

class SuratMagangGroup extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'nomor_surat'	=> 'required',
		'kepada'		=> 'required',
		// 'alamat'		=> 'required',
		'kota'			=> 'required',
		'jadwal'		=> 'required',
		'persetujuan'	=> 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['kode','nomor_surat','jumlah_lamp','kepada','alamat','kota','jadwal','tembusan','persetujuan'];

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
