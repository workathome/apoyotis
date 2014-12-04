<?php

class EvaluacionFinalCriterio extends Eloquent {

	protected $table = 'evaluacion_final_criterio';

	protected $primaryKey = 'evaluacion_final_id';

	protected $fillable = array(
		"evaluacion_final_id",
		"criterio_id_criterio",
		"porcentaje",
		"nombre_concepto",
	);

	public $timestamps = false;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function evaluacionFinal() {
		return $this->belongsTo('EvaluacionFinal', 'evaluacion_final_id');
	}

	public function criterio() {
		return $this->belongsTo('Criterio', 'criterio_id_criterio');
	}

}
