<?php

class Criterio extends Eloquent {

	protected $table = 'criterio';

	protected $primaryKey = 'id_criterio';

	protected $fillable = array(
		"nombre",
		"porcentaje_calificacion",
	);

	public $timestamps = false;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function criterio() {
		return $this->hasOne('EvaluacionFinalCriterio', 'criterio_id_criterio', 'id_criterio');
	}

}
