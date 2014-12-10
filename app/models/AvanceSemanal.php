<?php

class AvanceSemanal extends Eloquent {

	protected $table = 'avance_semanal';

	protected $primaryKey = 'codavance_semanal';

	protected $fillable = array(
		"fecha",
		"observaciones",
		"codplan_pago",
	);

	public $timestamps = false;

	public function grupoEmpresa() {
		return $this->belongsTo('PlanPago', 'codplan_pago');
	}

}
