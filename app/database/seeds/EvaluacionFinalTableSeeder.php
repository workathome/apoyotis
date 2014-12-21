<?php

class EvaluacionFinalTableSeeder extends Seeder {
	public function run() {
		DB::table('evaluacion_final')->delete();
	}
}