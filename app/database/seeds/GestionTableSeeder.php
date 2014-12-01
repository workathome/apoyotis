<?php

class GestionTableSeeder extends Seeder {
	public function run() {
		DB::table('gestion')->delete();

		Gestion::create(array(
				"anio_gestion"         => 2014,
				"semestre_id_semestre" => Semestre::all()[0]->id_semestre
			));
		Gestion::create(array(
				"anio_gestion"         => 2014,
				"semestre_id_semestre" => Semestre::all()[1]->id_semestre,
			));
		Gestion::create(array(
				"anio_gestion"         => 2015,
				"semestre_id_semestre" => Semestre::all()[0]->id_semestre,
			));
		Gestion::create(array(
				"anio_gestion"         => 2015,
				"semestre_id_semestre" => Semestre::all()[1]->id_semestre,
			));
	}
}