<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuratIjinStudiLapanganIndvsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('surat_ijin_studi_lapangan_indvs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nomor_surat');
			$table->string('jumlah_lamp');
			$table->string('hal');
			$table->string('kepada');
			$table->string('alamat');
			$table->string('kota');
			$table->string('mata_kuliah');
			$table->string('pembimbing');
			$table->string('nama');
			$table->string('nim');
			$table->string('prodi');
			$table->string('angkatan');
			$table->string('keterangan');
			$table->string('jadwal');
			$table->string('persetujuan');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('surat_ijin_studi_lapangan_indvs');
	}

}
