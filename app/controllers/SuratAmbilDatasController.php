<?php

class SuratAmbilDatasController extends \BaseController {

	/**
	 * Display a listing of suratijinstudilapanganindvs
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('suratambildatas.index')->withTitle('Surat Ijin Mengambil Data');
	}

	/**
	 * Store a newly created suratijinstudilapanganindv in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), SuratAmbilData::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$srt = SuratAmbilData::create($data);

		$idsrt = $srt->id;
		$datasrt = SuratAmbilData::whereId($idsrt)
			->with('Dataprodi')
			->with('Datapersetujuan')
			->first();
		// return $datasrt;
		return $this->exportPdf($datasrt);
	}
	
	private function exportPdf($surats)
	{
		$date = \Carbon\Carbon::now();
		$name = 'SuratMengambilData_'.$date->day.'_'.$date->month.'_'.$date->year.'_'.Date('H:i:s', strtotime($date)).'.pdf';
		$data['datas'] = $surats;
		$pdf = PDF::loadView('srtmahasiswa.SuratAmbilData',$data)->setPaper('a4');

		return $pdf->download($name); 
		// Redirect::route('surat_ijin_studi_lapangan_indv.index')->with("successMessage","Surat Berhasil di Buat ");
	}
}
