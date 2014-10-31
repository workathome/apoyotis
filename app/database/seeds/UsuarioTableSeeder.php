<?php

class UsuarioTableSeeder extends Seeder {
	public function run() {
		DB::table('user_rol')->delete();
		DB::table('consultor')->delete();
		DB::table('usuario')->delete();

		Usuario::create(array(
				'login'      => 'admin',
				'password'   => Hash::make('admin'),
				'habilitada' => 1,
			));
	}
}