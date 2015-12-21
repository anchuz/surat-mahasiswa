<?php

class SuratKunjunganGroupsController extends \BaseController {

	/**
	 * Display a listing of suratijinstudilapanganindvs
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('suratkunjungangroups.index')->withTitle('Surat Ijin Kunjungan Kelompok');
	}

	/**
	 * Store a newly created suratijinstudilapanganindv in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), SuratKunjunganGroup::$rules);
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
					DB::table('surat_kunjungan_groups')->insertGetId(
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

				$datasrt = SuratKunjunganGroup::where('kode',$kode)
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
		$name = 'SuratIjinKunjungan_'.$date->day.'_'.$date->month.'_'.$date->year.'_'.Date('H:i:s', strtotime($date)).'.pdf';
		$data['datas'] = $surats;
		$pdf = PDF::loadView('srtmahasiswa.SuratKunjunganGroup',$data)->setPaper('a4');

		return $pdf->download($name);
	}
}
