<?php

class Rol extends Eloquent {

	protected $table = 'rol';

	protected $primaryKey = 'codrol';

	protected $fillable = array('tiporol');

	public $timestamps = false;

	public function usuarios() {
		return $this->belongsToMany('Usuario', 'user_rol', 'rol_codrol', 'usuario_idusuario');
	}

	public static function idRolGrupoEmpresa() {
		return Rol::where("tiporol", "grupo-empresa")->first()->codrol;
	}

}
