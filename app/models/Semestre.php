<?php

class Semestre extends Eloquent {

	protected $table = 'semestre';

	protected $primaryKey = 'id_semestre';

	protected $fillable = array("numero_semestre");

	public $timestamps = false;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function gestiones() {
		return $this->hasMany('Gestion', 'semestre_id_semestre', 'id_semestre');
	}

}
