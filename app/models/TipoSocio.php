<?php

class TipoSocio extends Eloquent {

	protected $table = 'tipo_socio';

	protected $primaryKey = 'codtipo_socio';

	protected $fillable = array('nombretipo');

	public function socios() {
		return $this->hasMany('Socio', 'tipo_socio_codtipo_socio', 'codtipo_socio');
	}

}