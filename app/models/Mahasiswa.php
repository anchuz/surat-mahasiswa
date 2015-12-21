<?php

class Mahasiswa extends Eloquent {

	protected $table = 'tbsrt_maha'; //mengambil nama tabel yang tidak sama dengan nama model

	public static $rules = [
		// 'nomor_surat'	=> 'required',
		'kode'=> 'required',
		'mhs_nim'	=> 'required|alpha|min:9|max:11',
		'mhs_nama'	=> 'required',
		'mhs_prodi'	=> 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['kode','mhs_nim','mhs_nama','mhs_prodi'];

	public function SrtIjinLapG()
	{
		return $this->belongsTo('SuratIjinStudiLapanganGroup');
	}

	public function Prodi()
	{
		return $this->hasOne('Prodi','id','mhs_prodi');
	}
}