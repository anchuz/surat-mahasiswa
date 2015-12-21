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

	<title>Surat Ijin Membeli Bahan Kimia</title>
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
			<td width=72%>Permohonan ijin membeli bahan kimia</td>
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
			<td width=90% style="text-align:justify;">Dalam rangka {{$datas->mata_kuliah}} yang dibimbing oleh {{$datas->pembimbing}} bersama ini kami hadapkan mahasiswa:</td>
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
						<td>nama</td>
						<td>:</td>
						<td width=100%> {{$datas->nama}}</td>
					</tr>
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td width=100%> {{$datas->nim}}</td>
					</tr>
					<tr>
						<td>program Studi</td>
						<td>:</td>
						<td width=100%> {{$datas->Dataprodi->prodi}}</td>
					</tr>
					<tr>
						<td>tahun angkatan</td>
						<td>:</td>
						<td width=100%> {{$datas->angkatan}}</td>
					</tr>
				</table>
			</td>
			<td width=8%></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
			<td width=8%></td>
			<td width=90% style="text-align:justify;">untuk dapatnya membeli bahan kimia {{$datas->keterangan}} pada {{$datas->jadwal}} di instansi Saudara.</td>
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
	<img style="position: fixed; bottom:30; left:0;" src="assets/img/footer.jpg" border="0" ></div>
</body>
</html>