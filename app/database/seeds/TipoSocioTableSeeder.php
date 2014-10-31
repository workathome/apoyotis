<?php

class TipoSocioTableSeeder extends Seeder {
	public function run() {
		DB::table('tipo_socio')->delete();

		TipoSocio::create(array(
				'nombretipo' => "socio",
			));
		TipoSocio::create(array(
				'nombretipo' => "representante legal",
			));
	}
}