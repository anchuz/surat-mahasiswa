<html>
<head>
	<style>
		table.Myriad {
    		font-family: "Myriad Pro",sans-serif;
    		font-size: 16px;                                   
		}
		table.header1 {
    		font-family: sans-serif;
    		font-size: 12px;
    		font-style: normal;
		}
		table.header2 {
    		font-family: sans-serif;
    		font-size: 7px;
    		font-style: normal;
		}
	</style>

	<title>Surat Ijin Penempatan PKL</title>
</head>
<body>
	<div align="center"><img src="assets/img/Kopsurat2.jpg" border="0" width="732" height="96"></div>
	<!--table  width=700px>
		<tr>
			<td width=10%><div align="center"><img src="assets/img/kopsurat_baru.jpg" border="0" ></div></td>
			<td widht=60%>
				<table class="header1">
					<tr><td>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN</td></tr>
					<tr><td>UNIVERSITAS NEGERI SURABAYA</td></tr>
					<tr style="font-weight:bold"><td>FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM</td></tr>
				</table>
			</td>
			<td width=18%>
				<table class="header2">
					<tr><td>Kampus Ketintang</td></tr>
					<tr><td>Jalan Ketintang Gedung D1</td></tr>
					<tr><td>Surabaya 60231</td></tr>
					<tr><td>Telp/Fax : +6231-8296427 pes 310</td></tr>
					<tr><td>fmipa.unesa.ac.id</td></tr>
				</table>
			</td>
			<td width=12%></td>
		</tr>
	</table-->
	<br>
	<br>
	<table style="align:center;" width=700px class="Myriad">
		<tr>
			<td width=10%></td>
			<td width=15%>Nomor</td>
			<td width=3% style="text-align:center;"> : </td>
			<td style="padding-left: 50px;">/UN38.3/KM/{{tahun($datas->created_at)}}</td>
			<td width=30% style="text-align:right;">{{tanggal($datas->created_at)}}</td>
			<td width=10%></td>
		</tr>
		<tr>
			<td width=10%></td>
			<td width=15%>Lamp</td>
			<td width=3% style="text-align:center"> : </td>
			<td width=72%> @if ($datas->jumlah_lamp == '')
						    -
						   @else
						   {{$datas->jumlah_lamp}}
						   @endif</td>
			<td width=10%></td>
		</tr>
		<tr>
			<td width=10%></td>
			<td width=15%>Hal</td>
			<td width=3% style="text-align:center"> : </td>
			<td width=72%>Permohonan ijin penempatan PKL</td>
			<td width=10%></td>
		</tr>
		<tr>
			<td width=10%></td>
			<td width=15%></td>
			<td width=3%></td>
			<td width=72%>Mahasiswa FMIPA UNESA</td>
			<td width=10%></td>
		</tr>
	</table>
	<br>
	<br>
	<table style="align:center;" width=700px class="Myriad">
		<tr>
			<td width=8%></td>
			<td width=90%>Yth. {{$datas->kepada}}</td>
			<td width=8%></td>
		</tr>
		<tr>
			<td width=8%></td>
			<td width=90%>{{$datas->alamat}}</td>
			<td width=8%></td>
		</tr>
		<tr>
			<td width=8%></td>
			<td width=90%>{{$datas->kota}}</td>
			<td width=8%></td>
		</tr>
	</table>
	<br>
	<br>
	<table style="align:center;" width=700px class="Myriad">
		<tr>
			<td width=8%></td>
			<td width=90% style="text-align:justify;">Bersama ini kami mengajukan permohonan dapatnya mahasiswa dari FMIPA Universitas Negeri Surabaya melaksanakan Praktek Kerja Lapangan di instansi Saudara.</td>
			<td width=8%></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
			<td width=8%></td>
			<td width=90% style="text-align:justify;">Direncanakan pelaksanaan Praktek Kerja Lapangan pada bulan {{$datas->jadwal}}. Adapun yang akan melaksanakan Praktek Kerja Lapangan mahasiswa Program Studi <b>{{$datas->Dataprodi->prodi}}</b></td>
			<td width=8%></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
			<td width=8%></td>
			<td width=90%>
				<table class="Myriad" cellpadding="0" cellspacing="0" width="600px" style="border-collapse:collapse;">
					<?php $no=1; ?>
					@foreach($datas->Datamahasiswa as $value)
					<tr style="font-weight: bold;">
						<td style="text-align:center; width:10%"><?php echo $no ?>.</td>
						<td style="padding:1px 1px 5px 10px; width:45%">{{$value->mhs_nama}}</td>
						<td style="text-align:center; width:20%">NIM</td>
						<td style="text-align:center; width:25%">{{$value->mhs_nim}}</td>
						<?php $no++; ?>
					</tr>
					@endforeach
				</table>
			</td>
			<td width=8%></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
			<td width=8%></td>
			{{-- <td width=90% style="text-align:justify;">untuk dapatnya melakukan {{$datas->keterangan}} di instansi saudara pada {{$datas->jadwal}}</td> --}}
			<td width=90% style="text-align:justify;">Hal-hal lain yang berhubungan dengan pelaksanaan Praktek Kerja Lapangan di tempat, kami serahkan kepada kebijaksanaan Saudara.</td>
			<td width=8%></td>
		</tr>
	</table>
	<br>
	<table style="align:center;" width=700px class="Myriad">
		<tr>
			<td width=8%></td>
			<td width=50%></td>
			<td width=34%>{{$datas->Datapersetujuan->jabatan}}</td>
			<td width=8%></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
			<td width=8%></td>
			<td width=50%></td>
			<td width=34%>{{$datas->Datapersetujuan->nama}}</td>
			<td width=8%></td>
		</tr>
		<tr>
			<td width=8%></td>
			<td width=50%></td>
			<td width=34%>NIP.{{$datas->Datapersetujuan->nip}}</td>
			<td width=8%></td>
		</tr>
	</table>
	<br>
	<table style="align:center;" width=700px class="Myriad">
		<tr>
			<td width=8%></td>
			<td width=90%>Tembusan:</td>
			<td width=8%></td>
		</tr>
		<tr>
			<td width=8%></td>
			<td width=90%>1. Pembantu Dekan I FMIPA UNESA</td>
			<td width=8%></td>
		</tr>
		<tr>
			<td width=8%></td>
			<td width=90%> @if ($datas->Dataprodi->prodi == 'S1 Fisika')
							2. Ketua Jurusan Fisika FMIPA UNESA
						   @elseif ($datas->Dataprodi->prodi == 'S1 Pendidikan Fisika')
						    2. Ketua Jurusan Fisika FMIPA UNESA
						   @elseif ($datas->Dataprodi->prodi == 'S1 Kimia')
						    2. Ketua Jurusan Kimia FMIPA UNESA
						   @elseif ($datas->Dataprodi->prodi == 'S1 Pendidikan Kimia')
						    2. Ketua Jurusan Kimia FMIPA UNESA
						   @elseif ($datas->Dataprodi->prodi == 'S1 Biologi')
						    2. Ketua Jurusan Biologi FMIPA UNESA
						   @elseif ($datas->Dataprodi->prodi == 'S1 Pendidikan Biologi')
						    2. Ketua Jurusan Biologi FMIPA UNESA
						   @elseif ($datas->Dataprodi->prodi == 'S1 Matematika')
						    2. Ketua Jurusan Matemtika FMIPA UNESA
						   @elseif ($datas->Dataprodi->prodi == 'S1 Pendidikan Matematika')
						    2. Ketua Jurusan Matematika FMIPA UNESA
						   @elseif ($datas->Dataprodi->prodi == 'S1 Pendidikan IPA')
						    2. Ketua Prodi Pendidikan IPA FMIPA UNESA
						   @endif</td>
			<td width=8%></td>
		</tr>
		@if ($datas->tembusan == '')
		<tr>
			<td width=8%></td>
			<td width=90%>3. Arsip</td>
			<td width=8%></td>
		</tr>
		@else
		<tr>
			<td width=8%></td>
			<td width=90%>3. {{$datas->tembusan}}</td>
			<td width=8%></td>
		</tr>
		<tr>
			<td width=8%></td>
			<td width=90%>4. Arsip</td>
			<td width=8%></td>
		</tr>
		@endif
	</table>
	<img style="position: fixed; bottom:30; left:0;" src="assets/img/footer.jpg" border="0" ></div>
</body>
</html>