<?php

class SemestreTableSeeder extends Seeder {
	public function run() {
		DB::table('semestre')->delete();

		Semestre::create(array(
				"numero_semestre" => 1,
			));

		Semestre::create(array(
				"numero_semestre" => 2,
			));

	}
}