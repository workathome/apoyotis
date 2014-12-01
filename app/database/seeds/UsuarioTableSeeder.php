<?php

class UsuarioTableSeeder extends Seeder {
	public function run() {

		//$results = DB::select('select * from users where id = ?', array(1));
		DB::table('documento_actividad')->delete();
		DB::table('proyecto_documento')->delete();
		DB::table('actividad')->delete();
		DB::table('consultor_proyecto_grupo_empresa')->delete();
		DB::table('proyecto')->delete();
		DB::table('gestion')->delete();
		DB::table('semestre')->delete();
		DB::table('socio')->delete();
		DB::table('cons_documento')->delete();
		DB::table('ge_documento')->delete();
		DB::table('grupo_empresa')->delete();
		DB::table('user_rol')->delete();
		DB::table('consultor')->delete();
		DB::table('usuario')->delete();

		Usuario::create(array(
				'login'      => 'admin',
				'password'   => Hash::make('asdf'),
				'habilitada' => 1,
			));

		Usuario::create(array(
				'login'      => 'workathome',
				'password'   => Hash::make('asdf'),
				'habilitada' => 1,
			));

		Usuario::create(array(
				'login'      => 'leticia',
				'password'   => Hash::make('asdf'),
				'habilitada' => 1,
			));
	}
}