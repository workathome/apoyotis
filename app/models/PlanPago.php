<?php

class PlanPago extends Eloquent {

	protected $table = 'plan_pago';

	protected $primaryKey = 'codplan_pago';

	protected $fillable = array(
		"dia",
		"fijado",
		"montototal",
		"porcentaje_satisfaccion",
		"codconsultor_proyecto_grupo_empresa",
	);

	public $timestamps = false;

	public function consultorProyectoGrupoEmpresa() {
		return $this->belongsTo('ConsultorProyectoGrupoEmpresa', 'codconsultor_proyecto_grupo_empresa');
	}

	public function hitosPagables() {
		return $this->hasMany('HitoPagable', 'codplan_pago', 'codplan_pago');
	}

	public function avancesSemanales() {
		return $this->hasMany('AvanceSemanal', 'codplan_pago', 'codplan_pago');
	}

	public static function idRolGrupoEmpresa() {
		return Rol::where("tiporol", "grupo-empresa")->first()->codrol;
	}

}