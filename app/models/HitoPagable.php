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
		"observaciones",
		"codplan_pago"
	);

	public $timestamps = false;

	public function planDePago() {
		return $this->belongsTo('PlanPago', 'codplan_pago');
	}

	public function entregables() {
		return $this->hasMany('Entregable', 'codhito_pagable', 'codhito_pagable');
	}

}
