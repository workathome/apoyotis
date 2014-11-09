<?php

class Gestion extends Eloquent {

	protected $table = 'gestion';

	protected $primaryKey = "id_gestion";

	protected $fillable = array(
		"nombre_gestion",
	);

	public $timestamps = false;
}
