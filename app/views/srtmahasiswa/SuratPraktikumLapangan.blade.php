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

	<title>Surat Permohonan Ijin Praktikum Lapangan</title>
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
			<td width=72%>Permohonan ijin praktikum lapangan</td>
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
			<td width=90% style="text-align:justify;">Dalam rangka memenuhi tugas mata kuliah {{$datas->mata_kuliah}} Jurusan {{$datas->Datajurusan->jurusan}} angkatan {{$datas->angkatan}}, bersama ini kami sampaikan permohonan ijin untuk dapatnya mahasiswa beserta pembimbing (daftar nama terlampir) melakukan kegiatan praktikum lapangan di instansi Saudara yang dilaksanakan pada:</td>
			<td width=8%></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
			<td width=8%></td>
			<td width=90%>
				<table class="Myriad">
					<tr>
						<td>hari</td>
						<td width=10%>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>:</td>
						<td width=100%> {{$datas->hari}}</td>
					</tr>
					<tr>
						<td>tanggal</td>
						<td width=10%>&nbsp;</td>
						<td>:</td>
						<td width=100%> {{$datas->tanggal}}</td>
					</tr>
					<tr>
						<td>pukul</td>
						<td width=10%>&nbsp;</td>
						<td>:</td>
						<td width=100%> {{$datas->pukul}} WIB</td>
					</tr>
					<tr>
						<td>peserta</td>
						<td width=10%>&nbsp;</td>
						<td>:</td>
						<td width=60%> 1. Dosen Pembimbing</td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td width=10%>:</td>
						<td width=20%> {{$datas->dosen}}</td>
						<td width=10%> orang</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td width=10%>&nbsp;</td>
						<td width=60%> 2. Asisten Dosen</td>
						<td>&nbsp;</td>
						<td width=10%>:</td>
						<td width=20%> {{$datas->asdos}}</td>
						<td width=10%> orang</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td width=10%>&nbsp;</td>
						<td width=60%> 3. Mahasiswa</td>
						<td>&nbsp;</td>
						<td width=10%>:</td>
						<td width=20%> {{$datas->mhs}}</td>
						<td width=10%> orang</td>
					</tr>
				</table>
			</td>
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
		<tr>
			<td width=8%></td>
			<td width=90% style="text-align:justify;">Atas perhatiannya dan kerjasama yang baik, kami berterima kasih.</td>
			<td width=8%></td>
		</tr>
	</table>
	<br>
	<br>
	<br>
	<table style="align:center;" width=700px class="Myriad">
		<tr>
			<td width=8%></td>
			<td width=50%></td>
			<td width=34%>{{$datas->Datapersetujuan->jabatan}},</td>
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
	<table style="align:center;" width=700px class="Myriad">
		<tr>
			<td width=8%></td>
			<td width=90%>Tembusan:</td>
			<td width=8%></td>
		</tr>
		<tr>
			<td width=8%></td>
			<td width=90%>1. Ketua Jurusan {{$datas->Datajurusan->jurusan}} FMIPA UNESA</td>
			<td width=8%></td>
		</tr>
		<tr>
			<td width=8%></td>
			<td width=90%>2. Arsip</td>
			<td width=8%></td>
		</tr>
	</table>
	<img style="position: fixed; bottom:30; left:0;" src="assets/img/footer.jpg" border="0" ></div>
</body>
</html>