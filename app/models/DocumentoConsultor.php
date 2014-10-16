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
		return $this->belongsTo('Usuario', 'usuario_idusuario');
	}

	public function consultor() {
		return $this->belongsTo('Consultor');
	}

	public static function crear($input) {
		$respuesta = array();

		if (!Consultor::where('usuario_idusuario', '=', $input['usuario_idusuario'])->count()) {

			$archivoFoto   = $input['archivoFoto'];
			$extensionFoto = $input['archivoFoto']->getClientOriginalExtension();
			$rutaDestino   = public_path().'/img/foto_consultor/';
			$fotoConsultor = "".date('YmdHis')."_".str_replace(" ", "", $input['usuario_login']).".".$extensionFoto;

			$docConsultor = new DocumentoConsultor;

			$docConsultor->consultor_usuario_idusuario   = $input['consultor_usuario_idusuario'];
			$docConsultor->consultor_idconsultor         = $input['consultor_idconsultor'];
			$docConsultor->nombredocumento               = $input['nombredocumento'];
			$docConsultor->titulo_consdocumento          = $input['titulo_consdocumento'];
			$docConsultor->descripcionconsultordocumento = $input['descripcionconsultordocumento'];
			$docConsultor->pathdocumentoconsultor        = $input['pathdocumentoconsultor'];
			$docConsultor->save()
			
			$fotoSubido = $archivoFoto->move($rutaDestino, $fotoConsultor);

			$respuesta['mensaje'] = 'Consultor creado!';
			$respuesta['error']   = false;
			$respuesta['data']    = $consultor;
		} else {
			$respuesta['mensaje'] = 'El consultor ya existe!';
			$respuesta['error']   = true;
			$respuesta['data']    = "";
		}
		return $respuesta;
	}
}