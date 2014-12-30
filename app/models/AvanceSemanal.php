<?php

class AvanceSemanal extends Eloquent {

	protected $table = 'avance_semanal';

	protected $primaryKey = 'codavance_semanal';

	protected $fillable = array(
		"observaciones",
		"codplan_pago",
	);

	public $timestamps = true;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function grupoEmpresa() {
		return $this->belongsTo('PlanPago', 'codplan_pago');
	}

}
