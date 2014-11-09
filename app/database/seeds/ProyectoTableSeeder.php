<?php

class ProyectoTableSeeder extends Seeder {
	public function run() {
		DB::table('proyecto')->delete();

		/*
	Proyecto::create(array(
	"nombreproyecto"              => "prueba1",
	"fechafinproyecto"            => date("Y-m-d"),
	"consultor_idconsultor"       => Consultor::find(14)->idconsultor,
	"consultor_usuario_idusuario" => Consultor::find(14)->usuario_idusuario,
	"gestion_id_gestion"          => Gestion::all()[0]->id_gestion,
	"vigente"                     => true
	));
	 */

	}
}
