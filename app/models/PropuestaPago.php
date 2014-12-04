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

	public function grupoEmpresa() {
		return $this->belongsTo('GrupoEmpresa', 'grupo_empresa_codgrupo_empresa');
	}

}
