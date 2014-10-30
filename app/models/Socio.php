<?php

class Socio extends Eloquent {

	protected $table = 'socio';

	protected $primaryKey = 'idsocio';

	protected $fillable = array(
		"grupo_empresa_codgrupo_empresa",
		"tipo_socio_codtipo_socio",
		"grupo_empresa_usuario_idusuario",
		"nombresocio",
		"apellidossocio",
		"estadocivil",
		"direccion",
		"cargo",
		"correoelectronicosocio",
		"telefonosocio",

	);

	public function tiposocio() {
		return $this->belongsTo('TipoSocio', 'tipo_socio_codtipo_socio');
	}

}