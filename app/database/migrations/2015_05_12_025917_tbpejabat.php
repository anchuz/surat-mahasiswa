<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbpejabat extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbjabatans', function($table)
		{
			$table->increments('id');
			$table->string('nip')->length(30);
			$table->string('nama')->length(200);
			$table->string('jabatan')->lenght(100);
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
		Schema::drop('tbjabatans');
	}

}
