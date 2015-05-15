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
});
Route::group(array('before' => 'auth'), function () {
	
});
Route::get('dashboard', 'HomeController@dashboard');
Route::resource('surat_ijin_studi_lapangan_indv', 'SuratIjinStudiLapanganIndvsController');
Route::post('authenticate', 'HomeController@authenticate');
Route::get('login', array('guest.login', 'uses'=>'GuestController@login'));
Route::get('logout', 'HomeController@logout');