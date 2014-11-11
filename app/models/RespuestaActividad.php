<?php

class RespuestaActividad extends Eloquent {

	protected $table = 'repuesta_actividad';

	protected $primaryKey = 'codrepuesta_actividad';

	protected $fillable = array(
		"cons_actividad_consultor_idconsultor",
		"cons_actividad_consultor_usuario_idusuario",
		"cons_actividad_codcons_actividad",
		"ge_documento_grupo_empresa_usuario_idusuario",
		"ge_documento_grupo_empresa_codgrupo_empresa",
		"ge_documento_idge_documento",
	);

	public $timestamps = false;

}
