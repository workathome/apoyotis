<?php

class GrupoEmpresa extends Eloquent {

	protected $table = 'grupo_empresa';

	protected $primaryKey = 'codgrupo_empresa';

	protected $fillable = array(
		'usuario_idusuario',
		'nombrelargoge',
		'nombrecortoge',
		'correoge',
		'direccionge',
		'telefonoge',
		'logoge',
	);

	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario_idusuario');
	}

	public function documentos() {
		return $this->hasMany('GrupoEmpresaDocumento', 'grupo_empresa_codgrupo_empresa', 'codgrupo_empresa');
	}

	public static function crear($input) {
		$respuesta = array();

		$titulo_consdocumento = DocumentoConsultor::where('titulo_consdocumento', '=', $input['titulo_consdocumento'])->count();
		$nombredocumento      = DocumentoConsultor::where('nombredocumento', '=', $input['archivo']->getClientOriginalName())->count();

		if ($titulo_consdocumento == 0 && $nombredocumento == 0) {

			$archivo       = $input['archivo'];
			$nombreArchivo = $input['archivo']->getClientOriginalName();
			$rutaDestino   = '/docs_consultor/'.Auth::user()->idusuario."/";

			$docConsultor = new DocumentoConsultor;

			$docConsultor->consultor_usuario_idusuario   = Auth::user()->idusuario;
			$docConsultor->consultor_idconsultor         = Auth::user()->consultor->idconsultor;
			$docConsultor->nombredocumento               = $archivo->getClientOriginalName();
			$docConsultor->titulo_consdocumento          = $input['titulo_consdocumento'];
			$docConsultor->descripcionconsultordocumento = $input['descripcionconsultordocumento'];
			$docConsultor->pathdocumentoconsultor        = $rutaDestino.$nombreArchivo;
			$docConsultor->save();

			$rutaDestino = public_path().$rutaDestino;
			$rutaDestino = $archivo->move($rutaDestino, $nombreArchivo);

			$respuesta['mensaje'] = 'Documento creado!';
			$respuesta['error']   = false;
			$respuesta['data']    = $docConsultor;
		} else {
			$respuesta['mensaje'] = 'El Documento ya existe!';
			$respuesta['error']   = true;
			$respuesta['data']    = "";
		}
		return $respuesta;
	}

	public static function registrarSocio($input) {

	}

}
