<?php

class DocumentoConsultorTableSeeder extends Seeder {
	public function run() {
		DB::table('cons_documento')->delete();
	}
}