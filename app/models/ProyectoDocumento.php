<?php

class ProyectoDocumento extends Eloquent {

	protected $table = 'proyecto_documento';

	protected $primaryKey = "id_proyecto_documento";

	protected $fillable = array(
		"nombre_proyecto_documento",
		"proyecto_codproyecto",
		"es_consultor",
	);

	public $timestamps = true;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function proyecto() {
		return $this->belongsTo('Proyecto', 'proyecto_codproyecto');
	}

}
