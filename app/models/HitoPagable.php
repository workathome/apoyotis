<?php

class HitoPagable extends Eloquent {

	protected $table = 'hito_pagable';

	protected $primaryKey = 'codhito_pagable';

	protected $fillable = array(
		"nombre",
		"porcentaje_hito",
		"porcentaje_hito_alcanzado",
		"monto",
		"fecha",
		"aprobado",
		"presentado",
		"codplan_pago",
	);

	public $timestamps = false;

	public function planDePago() {
		return $this->belongsTo('PlanPago');
	}

}
