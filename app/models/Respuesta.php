<?php

class Respuesta extends Eloquent {

	protected $table = 'respuesta';

	protected $primaryKey = 'id_respuesta';

	protected $fillable = array(
		"nombre_respuesta",
		"titulo_respuesta",
		"descripcion_respuesta",
		"actividad_consultor_proyecto_grupo_empresa_codconsultor_proyect",
		"actividad_cod_actividad",
	);

	public $timestamps = true;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function actividad() {
		return $this->belongsTo('Actividad', 'actividad_cod_actividad');
	}

}