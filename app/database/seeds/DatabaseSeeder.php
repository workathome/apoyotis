<?php

class DatabaseSeeder extends Seeder {

	public function run() {
		Eloquent::unguard();
		$this->call('ConsultorTableSeeder');

		$this->call('DocumentoConsultorTableSeeder');
		$this->call('GrupoEmpresaTableSeeder');

		$this->call('RolTableSeeder');
		$this->call('UsuarioTableSeeder');
		$this->call('UsuarioRolTableSeeder');
	}

}
