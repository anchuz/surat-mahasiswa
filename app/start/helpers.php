<?php
function tanggal($tanggal)
{
	$date1 = date("Y-m-d H:i:s", strtotime($tanggal));
   	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
   	$tahun = substr($date1, 0, 4);
   	$bulan = substr($date1, 5, 2);
   	$tgl   = substr($date1, 8, 2);
             
   	return $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
}

function tahun($tanggal)
{
	$date1 = date("Y-m-d H:i:s", strtotime($tanggal));
 
   	$tahun = substr($date1, 0, 4);
             
   	return $tahun;
}