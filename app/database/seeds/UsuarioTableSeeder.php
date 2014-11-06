<?php

class UsuarioTableSeeder extends Seeder {
	public function run() {
		DB::table('socio')->delete();
		DB::table('ge_documento')->delete();
		DB::table('grupo_empresa')->delete();
		DB::table('user_rol')->delete();
		DB::table('consultor')->delete();
		DB::table('usuario')->delete();

		Usuario::create(array(
				'login'      => 'admin',
				'password'   => Hash::make('admin'),
				'habilitada' => 1,
			));

		Usuario::create(array(
				'login'      => 'workathome',
				'password'   => Hash::make('asdf'),
				'habilitada' => 1,
			));

		Usuario::create(array(
				'login'      => 'leticia',
				'password'   => Hash::make('leticia'),
				'habilitada' => 1,
			));
	}
}