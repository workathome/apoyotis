<?php

class DocumentoActividad extends Eloquent {

	protected $table = 'documento_actividad';

	protected $primaryKey = 'id_documento_actividad';

	protected $fillable = array(
		"nombre_documento_actividad",
		"pathdocumento_actividad",
		"actividad_cod_actividad",
		"is_consultor",
		"id_grupo_empresa",
	);

	public $timestamps = true;

	public function getDates() {
		return array('created_at', 'updated_at');
	}

	public function actividad() {
		return $this->belongsTo('Actividad', 'actividad_cod_actividad');
	}

	public static function crear($input) {
		$respuesta = array();

		$nombredocumento = static ::where('nombre_documento_actividad', '=', $input['archivo']->getClientOriginalName())->count();

		if ($nombredocumento == 0) {

			$archivo = $input['archivo'];

			$nombreArchivo = trim($input['archivo']->getClientOriginalName());
			$nombreArchivo = str_replace(' ', '_', $nombreArchivo);

			$rutaDestino = '/docs_grupoempresa/'.Auth::id()."/";

			$docGEmpresa = static ::create(array(
					"nombre_documento_actividad" => $nombreArchivo,
					"pathdocumento_actividad"    => $rutaDestino.$nombreArchivo,
					"actividad_cod_actividad"    => Actividad::all()[0]->cod_actividad,
					"is_consultor"               => false,
					"id_grupo_empresa"           => Auth::user()->grupoEmpresa->codgrupo_empresa
				));
			//Auth::user()->grupoempresa->proyectoAsociado->consultor->idconsultor

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