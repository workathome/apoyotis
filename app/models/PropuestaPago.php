<?php

class PropuestaPago extends Eloquent {

	protected $table = 'propuestapago';

	protected $primaryKey = 'codpropuestapago';

	protected $fillable = array(
		"grupo_empresa_usuario_idusuario",
		"grupo_empresa_codgrupo_empresa",
		"montototal",
		"porcentajesatisfaccion",
		"estado",
		"estadoregistro",
	);

	public $timestamps = false;

	public function usuarios() {
		return $this->belongsToMany('Usuario', 'user_rol', 'rol_codrol', 'usuario_idusuario');
	}

	public static function idRolGrupoEmpresa() {
		return Rol::where("tiporol", "grupo-empresa")->first()->codrol;
	}

}
