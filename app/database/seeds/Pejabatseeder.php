<?php

class Pejabat extends Seeder{
	public function run()
	{
		DB::table('tbjabatans')->insert(array(
			array('tbjabatans' => '196006201985031003','Prof. Dr. Suyono, M.Pd.','Dekan')))
	}
}
?>