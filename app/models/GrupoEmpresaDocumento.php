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

		/*

	"id_respuesta" int4 DEFAULT nextval('respuesta_id_respuesta_seq'::regclass) NOT NULL,
	"nombre_respuesta" varchar(45),
	"pathrespuesta" text,
	"titulo_respuesta" varchar(45),
	"descripcion_respuesta" text,
	 */
	);

	public $timestamps = true;
	/*
	public function grupoempresa() {
	return $this->belongsTo('GrupoEmpresa', 'grupo_empresa_codgrupo_empresa');
	}*/

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public static function crear($input) {
		$respuesta = array();

		$titulo_consdocumento = GrupoEmpresaDocumento::where('titulo_gedocumento', '=', $input['titulo_gedocumento'])->count();
		$nombredocumento      = GrupoEmpresaDocumento::where('nombredocumento', '=', $input['archivo']->getClientOriginalName())->count();

		if ($titulo_consdocumento == 0 && $nombredocumento == 0) {

			$archivo       = $input['archivo'];
			$nombreArchivo = $input['archivo']->getClientOriginalName();
			$rutaDestino   = '/docs_grupoempresa/'.Auth::user()->idusuario."/";

			$docGEmpresa = new GrupoEmpresaDocumento;

			$docGEmpresa->grupo_empresa_codgrupo_empresa  = Auth::user()->grupoempresa->codgrupo_empresa;
			$docGEmpresa->grupo_empresa_usuario_idusuario = Auth::user()->idusuario;
			$docGEmpresa->nombredocumento                 = $archivo->getClientOriginalName();
			$docGEmpresa->titulo_gedocumento              = $input['titulo_gedocumento'];
			$docGEmpresa->descripciongedocumento          = $input['descripciongedocumento'];
			$docGEmpresa->pathdocumentoge                 = $rutaDestino.$nombreArchivo;
			$docGEmpresa->save();

			$rutaDestino = public_path().$rutaDestino;
			$rutaDestino = $archivo->move($rutaDestino, $nombreArchivo);

			$respuesta['mensaje'] = 'Documento creado!';
			$respuesta['error']   = false;
			$respuesta['data']    = $docGEmpresa;
		} else {
			$respuesta['mensaje'] = 'El Documento ya existe!';
			$respuesta['error']   = true;
			$respuesta['data']    = "";
		}
		return $respuesta;
	}

}
