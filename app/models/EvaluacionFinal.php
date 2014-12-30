<?php

class EvaluacionFinal extends Eloquent {

	protected $table = 'evaluacion_final';

	protected $primaryKey = 'codevaluacion_final';

	protected $fillable = array(
		"codconsultor_proyecto_grupo_empresa",
		"fecha",
		"nota",
		"observaciones",
	);

	public $timestamps = false;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function consultorProyectoGrupoEmpresa() {
		return $this->belongsTo('ConsultorProyectoGrupoEmpresa', 'codconsultor_proyecto_grupo_empresa');
	}

	public function evaluacionFinalCriterio() {
		return $this->hasOne('EvaluacionFinalCriterio', 'evaluacion_final_id', 'codevaluacion_final');
	}

	public static function proyecto( $id_consultor_proyecto_grupo_empresa ){
		return static::where( 
			'codconsultor_proyecto_grupo_empresa',
			'=',
			$id_consultor_proyecto_grupo_empresa
			 )->first();
	}

}
