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
		td.top {
    		font-family: "Myriad Pro",sans-serif;
    		font-size: 20px;   
    		text-align: center;
    		font-weight:bold;
		}
		td.btop {
    		font-family: "Myriad Pro",sans-serif;
    		font-size: 16px;   
    		text-align: center;
    		font-weight:bold;
		}
	</style>

	<title>Surat Ijin Studi Lapangan</title>
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
	<table style="align:center;" width=700px>
		<tr>
			<td width=100% class="top"><u>SURAT KETERANGAN</u></td>
		</tr>
		<tr>
			<td width=100% class="btop">Nomor:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/UN38.3/KM/{{tahun($datas->created_at)}}</td>
		</tr>
	</table>
	<br>
	<table style="align:center;" width=700px class="Myriad">
		<tr>
			<td width=8%></td>
			<td width=90% style="text-align:justify;">Yang bertanda tangan di bawah ini:</td>
			<td width=8%></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
			<td width=8%></td>
			<td width=90%>
				<table class="Myriad" width="650px">
					<tr>
						<td width=20%>nama</td>
						<td width=5%>:</td>
						<td width=80%> Prof. Dr. Suyono, M.Pd.</td>
					</tr>
					<tr>
						<td>NIP</td>
						<td>:</td>
						<td> 196006201985031003</td>
					</tr>
					<tr>
						<td>jabatan</td>
						<td>:</td>
						<td> Dekan</td>
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
			<td width=90% style="text-align:justify;">menerangkan bahwa :</td>
			<td width=8%></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
			<td width=8%></td>
			<td width=90%>
				<table class="Myriad" width="650px">
					<tr>
						<td width=20%>nama</td>
						<td width=5%>:</td>
						<td width=80%> {{$datas->nama}}</td>
					</tr>
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td> {{$datas->nim}}</td>
					</tr>
					<tr>
						<td>program Studi</td>
						<td>:</td>
						<td> {{$datas->Dataprodi->prodi}}</td>
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
			{{-- <td width=90% style="text-align:justify;">untuk dapatnya melakukan {{$datas->keterangan}} di instansi saudara pada {{$datas->jadwal}}</td> --}}
			<td width=90% style="text-align:justify;">adalah benar-benar mahasiswa Fakultas Matemetika dan Ilmu Pengetahuan Alam Universitas Negeri Surabaya yang masih aktif mengikuti perkuliahan semester {{$datas->semester}} tahun {{$datas->ajaran}}.</td>
			<td width=8%></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		@if ($datas->keterangan != '')
		<tr>
			<td width=8%></td>
			<td width=90% style="text-align:justify;">Surat keterangan ini untuk {{$datas->keterangan}}.</td>
			<td width=8%></td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		@endif
		<tr>
			<td width=8%></td>
			<td width=90% style="text-align:justify;">Demikian surat ini dikeluarkan untuk dipergunakan sebagaimana mestinya.</td>
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
			<td width=34%>{{tanggal($datas->created_at)}}</td>
			<td width=8%></td>
		</tr>
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