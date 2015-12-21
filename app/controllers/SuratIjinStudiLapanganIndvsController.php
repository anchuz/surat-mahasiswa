<?php

class SuratIjinStudiLapanganIndvsController extends \BaseController {

	/**
	 * Display a listing of suratijinstudilapanganindvs
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('suratijinstudilapanganindvs.index')->withTitle('Surat Ijin Studi Lapangan Individu');
	}

	/**
	 * Show the form for creating a new suratijinstudilapanganindv
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('suratijinstudilapanganindvs.create');
	}

	/**
	 * Store a newly created suratijinstudilapanganindv in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), SuratIjinStudiLapanganIndv::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$srt = SuratIjinStudiLapanganIndv::create($data);

		$idsrt = $srt->id;
		$datasrt = SuratIjinStudiLapanganIndv::whereId($idsrt)
			->with('Dataprodi')
			->with('Datapersetujuan')
			->first();
		// return $datasrt;
		return $this->exportPdf($datasrt);
	}

	/**
	 * Display the specified suratijinstudilapanganindv.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$suratijinstudilapanganindv = Suratijinstudilapanganindv::findOrFail($id);

		return View::make('suratijinstudilapanganindvs.show', compact('suratijinstudilapanganindv'));
	}

	/**
	 * Show the form for editing the specified suratijinstudilapanganindv.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$suratijinstudilapanganindv = Suratijinstudilapanganindv::find($id);		

		return View::make('suratijinstudilapanganindvs.edit', compact('suratijinstudilapanganindv'));
	}

	/**
	 * Update the specified suratijinstudilapanganindv in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$suratijinstudilapanganindv = Suratijinstudilapanganindv::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Suratijinstudilapanganindv::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$suratijinstudilapanganindv->update($data);

		return Redirect::route('suratijinstudilapanganindvs.index');
	}

	/**
	 * Remove the specified suratijinstudilapanganindv from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Suratijinstudilapanganindv::destroy($id);

		return Redirect::route('suratijinstudilapanganindvs.index');
	}
	private function exportPdf($surats)
	{
		$date = \Carbon\Carbon::now();
		$name = 'SuratIjinStudiLapangan_'.$date->day.'_'.$date->month.'_'.$date->year.'_'.Date('H:i:s', strtotime($date)).'.pdf';
		$data['datas'] = $surats;
		$pdf = PDF::loadView('srtmahasiswa.SuratIjinStudiLapanganIndv',$data)->setPaper('a4');

		return $pdf->download($name); 
		// Redirect::route('surat_ijin_studi_lapangan_indv.index')->with("successMessage","Surat Berhasil di Buat ");
	}
}
