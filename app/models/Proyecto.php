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

	public function asociados() {
		return $this->hasMany('ConsultorProyectoGrupoEmpresa', 'proyecto_codproyecto', 'codproyecto');
	}

	public function documentos() {
		return $this->hasMany('ProyectoDocumento', 'proyecto_codproyecto', 'codproyecto');
	}

	public static function vigente() {
		return static ::where("vigente", "=", "t")->first();
	}

	public static function darDebaja() {

		$proyecto = static ::find(static ::vigente()->codproyecto);

		$proyecto->vigente = false;
		$proyecto->save();
	}

}
