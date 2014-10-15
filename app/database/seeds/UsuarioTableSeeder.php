<?php

class UsuarioTableSeeder extends Seeder {
	public function run() {
		DB::table('usuario')->delete();

		Usuario::create(array(
				'login'      => 'admin',
				'password'   => Hash::make('admin'),
				'habilitada' => 1,
			));
	}
}