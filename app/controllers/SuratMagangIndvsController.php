<?php

class SuratMagangIndvsController extends \BaseController {

	/**
	 * Display a listing of suratijinstudilapanganindvs
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('suratmagangindvs.index')->withTitle('Surat Ijin Penempatan Magang (Individu)');
	}

	/**
	 * Store a newly created suratijinstudilapanganindv in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), SuratMagangIndv::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$srt = SuratMagangIndv::create($data);

		$idsrt = $srt->id;
		$datasrt = SuratMagangIndv::whereId($idsrt)
			->with('Dataprodi')
			->with('Datapersetujuan')
			->first();
		// return $datasrt;
		return $this->exportPdf($datasrt);
	}

	private function exportPdf($surats)
	{
		$date = \Carbon\Carbon::now();
		$name = 'SuratMagang_'.$date->day.'_'.$date->month.'_'.$date->year.'_'.Date('H:i:s', strtotime($date)).'.pdf';
		$data['datas'] = $surats;
		$pdf = PDF::loadView('srtmahasiswa.SuratMagangIndv',$data)->setPaper('a4');

		return $pdf->download($name); 
	}
}
