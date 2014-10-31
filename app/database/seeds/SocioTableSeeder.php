<?php
class SocioTableSeeder extends Seeder {
	public function run() {
		DB::table('socio')->delete();
	}

}