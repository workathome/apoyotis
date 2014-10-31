
<?php

class GrupoEmpresaDocumentoTableSeeder extends Seeder {
	public function run() {
		DB::table('ge_documento')->delete();
	}
}