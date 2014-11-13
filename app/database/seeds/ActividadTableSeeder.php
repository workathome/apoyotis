<?php

class ActividadTableSeeder extends Seeder {
	public function run() {
		DB::table('actividad')->delete();
		$fktable = "consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em";
		$pktable = ConsultorProyectoGrupoEmpresa::all()[0]->codconsultor_proyecto_grupo_empresa;

		Actividad::create(array(
				"fechainicio"        => Date("Y-m-d"),
				"fechafin"           => "2014-12-01 00:00:00",
				"titulo"             => "Subir Parte A",
				"descripcion"        => "Las grupo empresas deben subir la parte A, de la propuesta",
				"contestada"         => false,
				$fktable             => $pktable,
				"requiere_respuesta" => true

			));

	}
}
