<?php

class Gestion extends Eloquent {

	protected $table = 'gestion';

	protected $primaryKey = "id_gestion";

	protected $fillable = array(
		"anio_gestion",
		"semestre_id_semestre",
	);

	public $timestamps = false;

	/*
public function semestre() {
//return $this->belongsto();
}
 */

}
