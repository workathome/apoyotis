<?php

class GrupoEmpresa extends Eloquent {

	protected $table = 'grupo_empresa';

	protected $primaryKey = 'codgrupo_empresa';

	protected $fillable = array(
		'usuario_idusuario',
		'nombrelargoge',
		'nombrecortoge',
		'correoge',
		'direccionge',
		'telefonoge',
		'logoge',
	);

	public $timestamps = false;

	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario_idusuario');
	}

}
