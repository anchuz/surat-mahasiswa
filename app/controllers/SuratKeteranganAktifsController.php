<?php

class SuratKeteranganAktifsController extends \BaseController {

	/**
	 * Display a listing of suratijinstudilapanganindvs
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('suratketeranganaktifs.index')->withTitle('Surat Keterangan Aktif Kuliah');
	}

	/**
	 * Store a newly created suratijinstudilapanganindv in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), SuratKeteranganAktif::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$srt = SuratKeteranganAktif::create($data);

		$idsrt = $srt->id;
		$datasrt = SuratKeteranganAktif::whereId($idsrt)
			->with('Dataprodi')
			->with('Datapersetujuan')
			->first();
		// return $datasrt;
		return $this->exportPdf($datasrt);
	}

	private function exportPdf($surats)
	{
		$date = \Carbon\Carbon::now();
		$name = 'SuratKeteranganAktif_'.$date->day.'_'.$date->month.'_'.$date->year.'_'.Date('H:i:s', strtotime($date)).'.pdf';
		$data['datas'] = $surats;
		$pdf = PDF::loadView('srtmahasiswa.SuratKeteranganAktif',$data)->setPaper('a4');

		return $pdf->download($name); 
		// Redirect::route('surat_ijin_studi_lapangan_indv.index')->with("successMessage","Surat Berhasil di Buat ");
	}
}
