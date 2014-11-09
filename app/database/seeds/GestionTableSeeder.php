<?php

class GestionTableSeeder extends Seeder {
	public function run() {
		DB::table('gestion')->delete();

		Gestion::create(array(
				"nombre_gestion" => "prueba gestion",
			));

	}
}