<?php

class GrupoEmpresaTableSeeder extends Seeder {
	public function run() {
		DB::table('grupo_empresa')->delete();

		GrupoEmpresa::create(array(
				
				$grupoEmpresa->usuario_idusuario = $input['usuario_idusuario'];
				$grupoEmpresa->nombrelargoge     = $input['nombrelargoge'];
				$grupoEmpresa->nombrecortoge     = $input['nombrecortoge'];
				$grupoEmpresa->correoge          = $input['correoge'];
				$grupoEmpresa->direccionge       = $input['direccionge'];
				$grupoEmpresa->telefonoge        = $input['telefonoge'];
				$grupoEmpresa->logoge            = $rutaDestino.$logoEmpresa;

			));
	}
}