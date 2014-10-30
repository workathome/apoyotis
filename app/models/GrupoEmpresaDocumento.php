<?php

class GrupoEmpresaDocumento extends Eloquent {

	protected $table = 'ge_documento';

	protected $primaryKey = "idge_documento";

	protected $fillable = array(
		"grupo_empresa_codgrupo_empresa",
		"grupo_empresa_usuario_idusuario",
		"nombredocumento",
		"pathdocumentoge",
		"titulo_gedocumento",
		"descripciongedocumento",
	);

	public $timestamps = false;

}
