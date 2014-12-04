<?php

class PlanDePagos extends Eloquent {

	protected $table = 'plandepagos';

	protected $primaryKey = 'codplandepagos';

	protected $fillable = array(
		"propuestapago_grupo_empresa_codgrupo_empresa",
		"propuestapago_grupo_empresa_usuario_idusuario",
		"propuestapago_codpropuestapago",
		"hitoevento",
		"porcentajepago",
		"montopago",
		"fechapago",
	);

	public $timestamps = false;

	public function usuarios() {
		return $this->belongsToMany('Usuario', 'user_rol', 'rol_codrol', 'usuario_idusuario');
	}

	public static function idRolGrupoEmpresa() {
		return Rol::where("tiporol", "grupo-empresa")->first()->codrol;
	}

}
