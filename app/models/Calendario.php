<?php

class Calendario extends Eloquent {

	protected $table = 'calendario';

	protected $primaryKey = 'codcalendario';

	protected $fillable = array(
		"grupo_empresa_codgrupo_empresa",
		"grupo_empresa_usuario_idusuario",
		"dia_reunion_fijado",
	);

	public $timestamps = false;

	public function usuarios() {
		return $this->belongsToMany('Usuario', 'user_rol', 'rol_codrol', 'usuario_idusuario');
	}

}
