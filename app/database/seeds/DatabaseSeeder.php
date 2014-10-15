<?php

class DatabaseSeeder extends Seeder {

	public function run() {
		Eloquent::unguard();
		$this->call('RolTableSeeder');
		$this->call('UsuarioTableSeeder');
		$this->call('UsuarioRolTableSeeder');

	}

}
