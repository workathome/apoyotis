<?php

class GrupoEmpresaTableSeeder extends Seeder {
	public function run() {
		DB::table('grupo_empresa')->delete();
	}
}