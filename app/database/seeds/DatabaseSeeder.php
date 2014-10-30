<?php

class DatabaseSeeder extends Seeder {

	public function run() {
		Eloquent::unguard();
		$this->call('DocumentoConsultorTableSeeder');
		$this->call('ConsultorTableSeeder');
		$this->call('GrupoEmpresaTableSeeder');

		$this->call('RolTableSeeder');
		$this->call('UsuarioTableSeeder');
		$this->call('UsuarioRolTableSeeder');

	}

}
