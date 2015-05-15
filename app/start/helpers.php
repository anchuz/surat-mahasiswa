<?php
public function tanggal()
{
   	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
   	$tahun = substr($date1, 0, 4);
   	$bulan = substr($date1, 5, 2);
   	$tgl   = substr($date1, 8, 2);
             
   	$tanggal = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
}