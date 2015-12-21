<?php

class SuratIjinStudiLapanganGroupsController extends \BaseController {

	/**
	 * Display a listing of suratijinstudilapanganindvs
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('suratijinstudilapangangroups.index')->withTitle('Surat Ijin Studi Lapangan Kelompok');
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
		$validator = Validator::make($data = Input::all(), SuratIjinStudiLapanganGroup::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		else {
			$date = new \DateTime;
			$kode='SISLG'.substr(md5(date('Y m d H i s')), 0,5);

			$prodiArray = array();
			if (!empty($_POST['myprodi']) && !empty($_POST['mynim']) && !empty($_POST['mynama'])){
				foreach($_POST['myprodi'] as $key => $prodi){
					$prodiArray[$key]['prodi'] = $prodi; 
				}
				foreach($_POST['mynim'] as $key => $nim){
					$prodiArray[$key]['nim'] = $nim;
				}
				foreach($_POST['mynama'] as $key => $nama){
					$prodiArray[$key]['nama'] = $nama;
				}

				foreach ($prodiArray as $value) {
					if(!empty($value['prodi'])){
				        $postData = array(
			                'nim' => $value['nim'],
			                'nama' => $value['nama'],
			                'prodi' => $value['prodi'],
			           	);
				        $rules = array(
			                'nim' => array( 'required', 'numeric', 'min:9' ),
			                'nama' => array( 'required' ),
			                'prodi' => array( 'required' ),
			            );
				        $messages = array(
			            	'nim.required' => 'NIM harus di isi',
			            	'nim.numeric' => 'NIM harus berupa angka',
			            	'nim.min' => 'NIM minimal 9 karakter',
			            	'nama.required' => 'Nama harus di isi',
			            	'prodi.required' => 'Harus memilih prodi',
			            );
				        $validator = Validator::make($postData, $rules, $messages);
						if ($validator->fails())
						{
							return Redirect::back()->withErrors($validator)->withInput();
						}
						if (empty($error)) {
						 	DB::table('tbsrt_maha')->insertGetId(
					      		array(
				                  	'kode' => $kode,
				                  	'mhs_nim' => $value['nim'],
				                  	'mhs_nama' => $value['nama'],
				                  	'mhs_prodi' => $value['prodi']
				            	)
				        	);
						}
					}
				}
				if (empty($error)){
					DB::table('surat_ijin_studi_lapangan_groups')->insertGetId(
			      		array(
			                  'kode' => $kode,
			                  'nomor_surat' => Input::get('nomor_surat'),
			                  'jumlah_lamp' => Input::get('jumlah_lamp'),
			                  'kepada' => input::get('kepada'),
			                  'alamat' => input::get('alamat'),
			                  'kota' => input::get('kota'),
			                  'mata_kuliah' => input::get('mata_kuliah'),
			                  'pembimbing' => input::get('pembimbing'),
			                  'jadwal' => input::get('jadwal'),
			                  'persetujuan' => input::get('persetujuan'),
			                  'created_at' => $date,
							  'updated_at' => $date
			            )
			        );
				}

				$datasrt = SuratIjinStudiLapanganGroup::where('kode',$kode)
					->with('Dataprodi')
					->with('Datapersetujuan')
					->with('Datamahasiswa')
					->first();

				return $this->exportPdf($datasrt);
			} else{
				return Redirect::back()->with("errorMessage","Daftar mahasiswa belum diisi ")->withInput();
				// print_r($_POST);
			}
      	}
      	//print_r($datasrt);
		// print_r($_POST);
		// print_r($prodiArray);
		//return Redirect::route('surat_ijin_studi_lapangan_indv.index')->with("successMessage","Surat Berhasil di Buat ");
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
	private function exportPdf($surats)
	{
		$date = \Carbon\Carbon::now();
		$name = 'SuratIjinStudiLapangan_'.$date->day.'_'.$date->month.'_'.$date->year.'_'.Date('H:i:s', strtotime($date)).'.pdf';
		$data['datas'] = $surats;
		$pdf = PDF::loadView('srtmahasiswa.SuratIjinStudiLapanganGroup',$data)->setPaper('a4');

		return $pdf->download($name);
	}
}
