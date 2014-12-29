<?php

class EntregableTableSeeder extends Seeder {
	public function run() {
		DB::table('entregable')->delete();
	}
}
