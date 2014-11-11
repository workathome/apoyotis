<?php

class Consultor extends Eloquent {

	protected $table = 'actividad';

	protected $primaryKey = 'cod_actividad';

	protected $fillable = array(
		"visiblepara",
		"requiererespuesta",
		"fechainicio",
		"fechafin",
		"horainicio",
		"horafin",
		"titulo",
		"descripcion",
		"contestada",
		"ruta",
		"archivo",
		"consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em",

	);

	public $timestamps = true;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function documentos() {
		return $this->hasMany('DocumentoActividad', 'actividad_cod_actividad','cod_actividad');
	}

	public function asociado() {
		return $this->belongsTo('ConsultorProyectoGrupoEmpresa', 'consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em');
	}

	public function respuesta(){
		return $this->hasOne('Respuesta','actividad_cod_actividad','cod_actividad')
	}

}
