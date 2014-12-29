<?php

class PlanPagoTableSeeder extends Seeder {
	public function run() {
		DB::table('plan_pago')->delete();
	}
}
