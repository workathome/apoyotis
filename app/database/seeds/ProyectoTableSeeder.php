<?php

class ProyectoTableSeeder extends Seeder {
	public function run() {
		DB::table('proyecto')->delete();
		Proyecto::create(array(
				"nombreproyecto"     => "Apoyo TIS",
				"fechafinproyecto"   => "2014-12-30 00:00:00",
				"id_consultor_log"   => Consultor::all()[0]->idconsultor,
				"gestion_id_gestion" => Gestion::all()[0]->id_gestion,
				"vigente"            => true
			));

	}
}
