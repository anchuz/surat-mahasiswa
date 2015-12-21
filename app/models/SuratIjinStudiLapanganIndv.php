<?php

class SuratIjinStudiLapanganIndv extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'nomor_surat'	=> 'required',
		'kepada'		=> 'required',
		// 'alamat'		=> 'required',
		'kota'			=> 'required',
		'mata_kuliah'	=> 'required',
		'pembimbing'	=> 'required',
		'nama'			=> 'required',
		'nim'			=> 'required|numeric',
		'prodi'			=> 'required',
		'angkatan'		=> 'required',
		// 'keterangan'	=> 'required',
		'jadwal'		=> 'required',
		'persetujuan'	=> 'required',
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['nomor_surat','jumlah_lamp','kepada','alamat','kota','mata_kuliah','pembimbing','nama','nim','prodi','angkatan','keterangan','jadwal','persetujuan'];

	public function Dataprodi()
	{
		return $this->hasOne('Prodi','id','prodi');
	}

	public function Datapersetujuan()
	{
		return $this->hasOne('Jabatan','id','persetujuan');
	}
}
