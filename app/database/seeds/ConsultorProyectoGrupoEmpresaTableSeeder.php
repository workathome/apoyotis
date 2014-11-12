<?php

class ConsultorProyectoGrupoEmpresaTableSeeder extends Seeder {
	public function run() {
		DB::table('consultor_proyecto_grupo_empresa')->delete();

		ConsultorProyectoGrupoEmpresa::create(array(

				"grupo_empresa_codgrupo_empresa"  => GrupoEmpresa::all()[0]->codgrupo_empresa,
				"proyecto_codproyecto"            => Proyecto::all()[0]->codproyecto,
				"grupo_empresa_usuario_idusuario" => GrupoEmpresa::all()[0]->usuario->idusuario,
				"consultor_idconsultor"           => Consultor::all()[0]->idconsultor
			));

	}
}
