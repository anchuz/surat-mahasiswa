<?php

class MahasiswaController extends \BaseController {

	/**
	 * Display a listing of suratijinstudilapanganindvs
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('suratijinstudilapangangroups.index')->withTitle('Surat Ijin Studi Lapangan Kelompok');;
	}

	/**
	 * Show the form for creating a new suratijinstudilapanganindv
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('suratijinstudilapangangroups.create');
	}

	/**
	 * Store a newly created suratijinstudilapanganindv in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Suratijinstudilapangangroup::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$srt = Suratijinstudilapangangroup::create($data);

		$idsrt = $srt->id;
		$datasrt = Suratijinstudilapangangroup::whereId($idsrt)
			->with('Dataprodi')
			->with('Datapersetujuan')
			->first();
		// return $datasrt;

		return Redirect::route('surat_ijin_studi_lapangan_indv.index')->with("successMessage","Mahasiswa berhasil ditambahkan ");
	}

	/**
	 * Display the specified suratijinstudilapanganindv.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$suratijinstudilapanganindv = Suratijinstudilapangangroup::findOrFail($id);

		return View::make('suratijinstudilapangangroups.show', compact('suratijinstudilapangangroup'));
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

		return View::make('suratijinstudilapangangroups.edit', compact('suratijinstudilapangangroup'));
	}

	/**
	 * Update the specified suratijinstudilapanganindv in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$suratijinstudilapangangroup = Suratijinstudilapangangroup::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Suratijinstudilapangangroup::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$suratijinstudilapanganindv->update($data);

		return Redirect::route('suratijinstudilapangangroups.index');
	}

	/**
	 * Remove the specified suratijinstudilapanganindv from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Suratijinstudilapangangroup::destroy($id);

		return Redirect::route('suratijinstudilapangangroups.index');
	}
}
