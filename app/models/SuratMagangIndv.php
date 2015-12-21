<?php

class SuratMagangIndv extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'nomor_surat'	=> 'required',
		'kepada'		=> 'required',
		// 'alamat'		=> 'required',
		'kota'			=> 'required',
		'nama'			=> 'required',
		'nim'			=> 'required|numeric',
		'prodi'			=> 'required',
		'jadwal'		=> 'required',
		'persetujuan'	=> 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['nomor_surat','jumlah_lamp','kepada','alamat','kota','nama','nim','prodi','jadwal','tembusan','persetujuan'];

	public function Dataprodi()
	{
		return $this->hasOne('Prodi','id','prodi');
	}

	public function Datapersetujuan()
	{
		return $this->hasOne('Jabatan','id','persetujuan');
	}
}
