<?php

class Entregable extends Eloquent {

	protected $table = 'entregable';

	protected $primaryKey = 'codentregable';

	protected $fillable = array(
		"nombre" ,
		"entregado" ,
		"codhito_pagable"
	);

	public $timestamps = false;

	public function hitoPagable() {
		return $this->belongsTo('HitoPagable', 'codhito_pagable');
	}

}
