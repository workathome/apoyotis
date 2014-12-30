<?php

class AvanceSemanalTableSeeder extends Seeder {
	public function run() {
		DB::table('avance_semanal')->delete();
	}
}