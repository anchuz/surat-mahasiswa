<?php

class SuratMagangGroupsController extends \BaseController {

	/**
	 * Display a listing of suratijinstudilapanganindvs
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('suratmaganggroups.index')->withTitle('Surat Ijin Magang (Kelompok)');
	}

	/**
	 * Store a newly created suratijinstudilapanganindv in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), SuratMagangGroup::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		else {
			$date = new \DateTime;
			$kode='SIMG'.substr(md5(date('Y m d H i s')), 0,5);

			$prodiArray = array();
			if (!empty($_POST['mynim']) && !empty($_POST['mynama'])){
				foreach($_POST['mynim'] as $key => $nim){
					$prodiArray[$key]['nim'] = $nim;
				}
				foreach($_POST['mynama'] as $key => $nama){
					$prodiArray[$key]['nama'] = $nama;
				}

				foreach ($prodiArray as $value) {
					if(!empty($value['nim'])){
				        $postData = array(
			                'nim' => $value['nim'],
			                'nama' => $value['nama'],
			           	);
				        $rules = array(
			                'nim' => array( 'required', 'numeric', 'min:9' ),
			                'nama' => array( 'required' ),
			            );
				        $messages = array(
			            	'nim.required' => 'NIM harus di isi',
			            	'nim.numeric' => 'NIM harus berupa angka',
			            	'nim.min' => 'NIM minimal 9 karakter',
			            	'nama.required' => 'Nama harus di isi',
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
				                  	'mhs_nama' => $value['nama']
				            	)
				        	);
						}
					}
				}
				if (empty($error)){
					DB::table('surat_magang_groups')->insertGetId(
			      		array(
			                  'kode' => $kode,
			                  'nomor_surat' => Input::get('nomor_surat'),
			                  'jumlah_lamp' => Input::get('jumlah_lamp'),
			                  'kepada' => input::get('kepada'),
			                  'alamat' => input::get('alamat'),
			                  'kota' => input::get('kota'),
			                  'jadwal' => input::get('jadwal'),
			                  'prodi' => input::get('prodi'),
			                  'tembusan' => input::get('tembusan'),
			                  'persetujuan' => input::get('persetujuan'),
			                  'created_at' => $date,
							  'updated_at' => $date
			            )
			        );
				}

				$datasrt = SuratMagangGroup::where('kode',$kode)
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

	private function exportPdf($surats)
	{
		$date = \Carbon\Carbon::now();
		$name = 'SuratMagang_'.$date->day.'_'.$date->month.'_'.$date->year.'_'.Date('H:i:s', strtotime($date)).'.pdf';
		$data['datas'] = $surats;
		$pdf = PDF::loadView('srtmahasiswa.SuratMagangGroup',$data)->setPaper('a4');

		return $pdf->download($name);
	}
}
