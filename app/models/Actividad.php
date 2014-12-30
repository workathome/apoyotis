<?php

class Actividad extends Eloquent {

	protected $table = 'actividad';

	protected $primaryKey = 'cod_actividad';

	protected $fillable = array(
		"fechainicio",
		"fechafin",
		"titulo",
		"descripcion",
		"contestada",
		"consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em",
		"requiere_respuesta",
	);

	public $timestamps = true;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function documentos() {
		return $this->hasMany('DocumentoActividad', 'actividad_cod_actividad', 'cod_actividad');
	}

	public function asociado() {
		return $this->belongsTo('ConsultorProyectoGrupoEmpresa', 'consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em');
	}

	public function respuesta() {
		return $this->hasOne( 'Respuesta' , 'actividad_cod_actividad' , 'cod_actividad' );
	}
}
