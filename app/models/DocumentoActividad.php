<?php

class DocumentoActividad extends Eloquent {

	protected $table = 'documento_actividad';

	protected $primaryKey = 'id_documento_actividad';

	protected $fillable = array(
		"nombre_documento_actividad",
		"pathdocumento_actividad",
		"actividad_cod_actividad",
		"is_consultor",
	);

	public $timestamps = true;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function actividad() {
		return $this->belongsTo('Actividad', 'actividad_cod_actividad');
	}

}