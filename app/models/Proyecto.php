<?php

class Proyecto extends Eloquent {

	protected $table = 'proyecto';

	protected $primaryKey = "codproyecto";

	protected $fillable = array(
		"nombreproyecto",
		"fechafinproyecto",
		"consultor_idconsultor",
		"consultor_usuario_idusuario",
		"gestion_id_gestion",
		"vigente",
	);

	public $timestamps = true;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

}