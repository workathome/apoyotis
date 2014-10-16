<?php

class Consultor extends Eloquent {

	protected $table = 'consultor';

	protected $primaryKey = 'idconsultor';

	protected $fillable = array(
		'usuario_idusuario',
		'nombreconsultor',
		'apellidopaternoconsultor',
		'apellidomaternoconsultor',
		'correoconsultor',
		'telefonoconsultor',
		'fotoconsultor',
	);

	public $timestamps = false;

	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario_idusuario');
	}

	public function documentos() {
		return $this->hasMany('DocumentoConsultor', 'consultor_idconsultor');
	}

	public static function crear($input) {
		$respuesta = array();

		if (!Consultor::where('usuario_idusuario', '=', $input['usuario_idusuario'])->count()) {

			$archivoFoto   = $input['archivoFoto'];
			$extensionFoto = $input['archivoFoto']->getClientOriginalExtension();
			$rutaDestino   = '/img/foto_consultor/';
			$fotoConsultor = "".date('YmdHis')."_".str_replace(" ", "", $input['usuario_login']).".".$extensionFoto;

			$consultor = new Consultor;

			$consultor->usuario_idusuario        = $input['usuario_idusuario'];
			$consultor->nombreconsultor          = $input['nombreconsultor'];
			$consultor->apellidopaternoconsultor = $input['apellidopaternoconsultor'];
			$consultor->apellidomaternoconsultor = $input['apellidomaternoconsultor'];
			$consultor->correoconsultor          = $input['correoconsultor'];
			$consultor->telefonoconsultor        = $input['telefonoconsultor'];
			$consultor->fotoconsultor            = $rutaDestino.$fotoConsultor;
			$consultor->save();

			$rutaDestino = public_path().$rutaDestino;
			$fotoSubido  = $archivoFoto->move($rutaDestino, $fotoConsultor);

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