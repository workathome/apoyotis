<?php

class UsuarioRolTableSeeder extends Seeder {
	public function run() {
		DB::table('user_rol')->delete();

		UserRol::create(array(
				'usuario_idusuario' => 1,
				'rol_codrol'        => 1,
			));
	}
}