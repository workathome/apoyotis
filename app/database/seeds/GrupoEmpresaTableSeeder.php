<?php

class GrupoEmpresaTableSeeder extends Seeder {
	public function run() {
		DB::table('grupo_empresa')->delete();

		GrupoEmpresa::create(array(

				'usuario_idusuario' => Usuario::where('login', '=', 'workathome')->first()->idusuario,
				'nombrelargoge'     => "Work At Home S.R.L.",
				'nombrecortoge'     => "WHS S.R.L.",
				'correoge'          => "workathomesoft@gmail.com",
				'direccionge'       => "Av. Maria del carmen Nro S/n",
				'telefonoge'        => "70797024",
				'logoge'            => "/img/logo_grupo_empresas/20141015055355_work_at_home.png",
			));
	}
}