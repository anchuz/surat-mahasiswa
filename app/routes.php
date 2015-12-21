<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('mahasiswa.dashboard');
	// return View::make('layouts.master2');
});
Route::group(array('before' => 'auth'), function () {
	
});
Route::get('dashboard', 'HomeController@dashboard');
Route::get('comingsoon', 'HomeController@comingsoon');

Route::resource('surat_ijin_studi_lapangan_indv', 'SuratIjinStudiLapanganIndvsController');
Route::resource('surat_ijin_studi_lapangan_group', 'SuratIjinStudiLapanganGroupsController');
Route::resource('surat_kunjungan_indv', 'SuratKunjunganIndvsController');
Route::resource('surat_membeli_bahan', 'SuratMembeliBahansController');
Route::resource('surat_penelitian', 'SuratPenelitiansController');
Route::resource('surat_ambil_data', 'SuratAmbilDatasController');
Route::resource('surat_uji_pendahuluan', 'SuratUjiPendahuluansController');
Route::resource('surat_uji_sampel', 'SuratUjiSampelsController');
Route::resource('surat_magang_indv', 'SuratMagangIndvsController');
Route::resource('surat_pkl_indv', 'SuratPklIndvsController');
Route::resource('surat_prak_lap', 'SuratPraktikumLapangansController');
Route::resource('surat_magang_group', 'SuratMagangGroupsController');
Route::resource('surat_pkl_group', 'SuratPklGroupsController');
Route::resource('surat_kunjungan_group', 'SuratKunjunganGroupsController');
Route::resource('surat_kartu_anggota', 'SuratKartuAnggotasController');
Route::resource('surat_pra_penelitian', 'SuratPraPenelitiansController');
Route::resource('surat_ket_kehilangan', 'SuratKeteranganKehilangansController');
Route::resource('surat_ket_kehilangan_spp', 'SuratKeteranganKehilanganSppsController');
Route::resource('surat_ket_aktif', 'SuratKeteranganAktifsController');

Route::post('authenticate', 'HomeController@authenticate');
Route::get('login', array('guest.login', 'uses'=>'GuestController@login'));
Route::get('logout', 'HomeController@logout');