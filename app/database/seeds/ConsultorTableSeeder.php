<?php

class ConsultorTableSeeder extends Seeder {
	public function run() {
		DB::table('consultor')->delete();
	}
}