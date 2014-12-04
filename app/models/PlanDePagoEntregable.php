<?php

class PlanDePagoEntregable extends Eloquent {

	protected $table = 'planpago_entregables';

	protected $primaryKey = 'codplanpago_entregables';

	protected $fillable = array(
		"plandepagos_propuestapago_codpropuestapago",
		"plandepagos_propuestapago_grupo_empresa_usuario_idusuario",
		"plandepagos_propuestapago_grupo_empresa_codgrupo_empresa",
		"plandepagos_codplandepagos",
		"entregable",
	);

	public $timestamps = false;

	public function usuarios() {
		return $this->belongsToMany('Usuario', 'user_rol', 'rol_codrol', 'usuario_idusuario');
	}

	public static function idRolGrupoEmpresa() {
		return Rol::where("tiporol", "grupo-empresa")->first()->codrol;
	}

}
