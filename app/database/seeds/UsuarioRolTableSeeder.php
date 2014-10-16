<?php

class UsuarioRolTableSeeder extends Seeder {
	public function run() {
		DB::table('user_rol')->delete();

		UserRol::create(array(
				'usuario_idusuario' => Usuario::all()->first()->idusuario,
				'rol_codrol'        => Rol::where("tiporol", "administrador")->first()->codrol,
			));
	}
}