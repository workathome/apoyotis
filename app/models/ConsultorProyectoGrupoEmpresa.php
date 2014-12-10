<?php

class ConsultorProyectoGrupoEmpresa extends Eloquent {

	protected $table = 'consultor_proyecto_grupo_empresa';

	protected $primaryKey = "codconsultor_proyecto_grupo_empresa";

	protected $fillable = array(
		"grupo_empresa_codgrupo_empresa",
		"proyecto_codproyecto",
		"grupo_empresa_usuario_idusuario",
		"consultor_idconsultor",
	);

	public $timestamps = true;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function grupoEmpresa() {
		return $this->belongsTo('GrupoEmpresa', 'grupo_empresa_codgrupo_empresa');
	}

	public function consultor() {
		return $this->belongsTo('Consultor', 'consultor_idconsultor');
	}

	public function proyecto() {
		return $this->belongsTo('Proyecto', 'proyecto_codproyecto');
	}

	public function actividades() {
		return $this->hasMany('Actividad', 'consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em', 'codconsultor_proyecto_grupo_empresa');
	}

	public function evaluacionFinal() {
		return $this->hasOne('EvaluacionFinal', 'codconsultor_proyecto_grupo_empresa', 'codconsultor_proyecto_grupo_empresa');
	}

	public function planPago() {
		return $this->hasOne('PlanPago', 'codconsultor_proyecto_grupo_empresa', 'codconsultor_proyecto_grupo_empresa');
	}

	public static function ConsultorEmpresas() {

		$idConsultor        = Auth::user()->consultor->idconsultor;
		$consultor_empresas = static ::where("consultor_idconsultor", "=", $idConsultor)->get();
		return $consultor_empresas;
	}

	public static function proyectoAasociado($id_grupo_empresa) {
		return static ::where('grupo_empresa_codgrupo_empresa', '=', $id_grupo_empresa)->first();
	}

}
