<?php

class UsuarioRolTableSeeder extends Seeder {
	public function run() {
		DB::table('user_rol')->delete();

		UsuarioRol::create(array(
				'usuario_idusuario' => Usuario::where('login', '=', 'admin')->first()->idusuario,
				'rol_codrol'        => Rol::where("tiporol", "administrador")->first()->codrol,
			));
		
		UsuarioRol::create(array(
				'usuario_idusuario' => Usuario::where('login', '=', 'workathome')->first()->idusuario,
				'rol_codrol'        => Rol::where("tiporol", "grupo-empresa")->first()->codrol,
			));
		
		UsuarioRol::create(array(
				'usuario_idusuario' => Usuario::where('login', '=', 'leticia')->first()->idusuario,
				'rol_codrol'        => Rol::where("tiporol", "consultor")->first()->codrol,
			));
		
		UsuarioRol::create(array(
				'usuario_idusuario' => Usuario::where('login', '=', 'corina')->first()->idusuario,
				'rol_codrol'        => Rol::where("tiporol", "consultor")->first()->codrol,
			));
		
		UsuarioRol::create(array(
				'usuario_idusuario' => Usuario::where('login', '=', 'marco')->first()->idusuario,
				'rol_codrol'        => Rol::where("tiporol", "consultor")->first()->codrol,
			));
		
	}
}