<?php

class SuratPklIndvsController extends \BaseController {

	/**
	 * Display a listing of suratijinstudilapanganindvs
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('suratpklindvs.index')->withTitle('Surat Ijin Penempatan PKL (Individu)');
	}

	/**
	 * Store a newly created suratijinstudilapanganindv in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), SuratPklIndv::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$srt = SuratPklIndv::create($data);

		$idsrt = $srt->id;
		$datasrt = SuratPklIndv::whereId($idsrt)
			->with('Dataprodi')
			->with('Datapersetujuan')
			->first();
		// return $datasrt;
		return $this->exportPdf($datasrt);
	}

	private function exportPdf($surats)
	{
		$date = \Carbon\Carbon::now();
		$name = 'SuratPKL_'.$date->day.'_'.$date->month.'_'.$date->year.'_'.Date('H:i:s', strtotime($date)).'.pdf';
		$data['datas'] = $surats;
		$pdf = PDF::loadView('srtmahasiswa.SuratPklIndv',$data)->setPaper('a4');

		return $pdf->download($name); 
	}
}
