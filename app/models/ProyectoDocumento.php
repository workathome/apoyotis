<?php

class ProyectoDocumento extends Eloquent {

	protected $table = 'proyecto_documento';

	protected $primaryKey = "id_proyecto_documento";

	protected $fillable = array(
		"nombre_documento_proyecto",
		"proyecto_codproyecto",
		"es_publico",
		"path_documento",
		"titulo_documento",
		"id_consultor",
	);

	public $timestamps = true;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function proyecto() {
		return $this->belongsTo('Proyecto', 'proyecto_codproyecto');
	}

	public static function crear($input) {

		$respuesta = array();

		$titulo_documento = static ::where('titulo_documento', '=', $input['titulo_documento'])->count();

		$nombreArchivo = trim($input['archivo']->getClientOriginalName());
		$nombreArchivo = str_replace(' ', '_', $nombreArchivo);

		$nombredocumento = static ::where('nombre_documento_proyecto', '=', $nombreArchivo)->count();

		if ($titulo_documento == 0 && $nombredocumento == 0) {

			$archivo = $input['archivo'];

			$rutaDestino = '/docs_proyecto/'.Proyecto::vigente()->codproyecto."/";

			$documento = static ::create(array(

					"proyecto_codproyecto"      => Proyecto::vigente()->codproyecto,
					"titulo_documento"          => $input['titulo_documento'],
					"nombre_documento_proyecto" => $nombreArchivo,
					"es_publico"                => (Input::get('es_publico'))?true:false,
					"path_documento"            => $rutaDestino.$nombreArchivo,
					"id_consultor"              => Auth::user()->consultor->idconsultor

				));

			$rutaDestino = public_path().$rutaDestino;
			$rutaDestino = $archivo->move($rutaDestino, $nombreArchivo);

			$respuesta['mensaje'] = 'Documento creado!';
			$respuesta['error']   = false;
			$respuesta['data']    = $documento;
		} else {
			$respuesta['mensaje'] = 'El Documento ya existe!';
			$respuesta['error']   = true;
			$respuesta['data']    = "";
		}
		return $respuesta;
	}
}
