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

	public static function rangoDias() {

		DB::setFetchMode(PDO::FETCH_ASSOC);
		$rango_dias = DB::select('SELECT enum_range(NULL::days)');
		DB::setFetchMode(PDO::FETCH_CLASS);

		$rango_dias = preg_replace("/{|}/", "", $rango_dias[0]['enum_range']);
		$rango_dias = explode(",", $rango_dias);

		return $rango_dias;
	}

	public static function esFijado() {

		$codGrupoEmpresa = Auth::user()->grupoEmpresa->codgrupo_empresa;

		$consultorProyectoGrupoEmpresa = ConsultorProyectoGrupoEmpresa::
		where("grupo_empresa_codgrupo_empresa", "=", $codGrupoEmpresa)->first();
		$planPago = $consultorProyectoGrupoEmpresa->planPago;

		if (isset($planPago)) {

			return ($planPago->dia == true) ? true : false ;

		} else {
			return false;
		}
	}

	public static function registrarDia( $dia ){

		$codconsultor_proyecto_grupo_empresa = ConsultorProyectoGrupoEmpresa::proyectoActual()
												->codconsultor_proyecto_grupo_empresa;

		$dias = array(
			'Lunes'     => 0, 
			'Martes'    => 1, 
			'Miercoles' => 2, 
			'Jueves'    => 3, 
			'Viernes'   => 4, 
			'Sabado'    => 5, 
			);

		static::create(array(
			"dia"    => array_search( $dia , $dias ),
			"fijado" => true,
			"codconsultor_proyecto_grupo_empresa" => $codconsultor_proyecto_grupo_empresa
		));

	}

	public static function existe() {

		$codGrupoEmpresa = Auth::user()->grupoEmpresa->codgrupo_empresa;

		$consultorProyectoGrupoEmpresa = ConsultorProyectoGrupoEmpresa::
		where("grupo_empresa_codgrupo_empresa", "=", $codGrupoEmpresa)->first();

		$planPago = $consultorProyectoGrupoEmpresa->planPago;

		if ( isset( $planPago ) ) {

			return true;
		} else {
			return false;

		}
	}

}
