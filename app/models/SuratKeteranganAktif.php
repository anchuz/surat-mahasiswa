<?php

class SuratKeteranganAktif extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'nomor_surat'	=> 'required',
		'nama'			=> 'required',
		'nim'			=> 'required|numeric',
		'prodi'			=> 'required',
		'semester'		=> 'required',
		'ajaran'		=> 'required',
		// 'keterangan'	=> 'required',
		'persetujuan'	=> 'required',
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['nomor_surat','nama','nim','prodi','semester','ajaran','keterangan','persetujuan'];

	public function Dataprodi()
	{
		return $this->hasOne('Prodi','id','prodi');
	}

	public function Datapersetujuan()
	{
		return $this->hasOne('Jabatan','id','persetujuan');
	}
}
