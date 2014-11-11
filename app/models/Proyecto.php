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
		"id_consultor_log",
	);

	public $timestamps = true;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public static function vigente_exist() {
		foreach (static ::all() as $key => $proyecto) {
			if ($proyecto->vigente) {
				return "True";
			}
		}
		return "False";

	}

}
