<?php

class RolTableSeeder extends Seeder {
	public function run() {
		DB::table('rol')->delete();

		Rol::create(array(
				'tiporol' => 'administrador',
			));
		Rol::create(array(
				'tiporol' => 'consultor',
			));
		Rol::create(array(
				'tiporol' => 'grupo-empresa',
			));
		Rol::create(array(
				'tiporol' => 'otro',
			));
	}
}