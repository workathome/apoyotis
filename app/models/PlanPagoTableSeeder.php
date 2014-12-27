<?php

class PlanPagoTableSeeder extends Seeder {
	public function run() {
		DB::table('plan_pago')->delete();
		Planpago::create(array(
				"fijado",
				"montototal",
				"porcentaje_satisfaccion",
				"codconsultor_proyecto_grupo_empresa",
			));

	}
}
