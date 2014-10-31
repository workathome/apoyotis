<?php

class TipoSocio extends Eloquent {

	protected $table = 'tipo_socio';

	protected $primaryKey = 'codtipo_socio';

	protected $fillable = array('nombretipo');

	public $timestamps = false;

	public function socios() {
		return $this->hasMany('Socio', 'tipo_socio_codtipo_socio', 'codtipo_socio');
	}

}