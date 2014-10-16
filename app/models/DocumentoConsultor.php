<?php

class DocumentoConsultor extends Eloquent {

	protected $table = 'cons_documento';

	protected $primaryKey = 'idcons_documento';

	protected $fillable = array(
		'consultor_usuario_idusuario', //NULL,
		'consultor_idconsultor', //NULL,
		'nombredocumento',
		'titulo_consdocumento',
		'descripcionconsultordocumento',
		'pathdocumentoconsultor',
	);

	public $timestamps = false;

	public function usuario() {
		return $this->belongsTo('Usuario', 'consultor_usuario_idusuario');
	}

	public function consultor() {
		return $this->belongsTo('Consultor', 'consultor_idconsultor');
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
}
