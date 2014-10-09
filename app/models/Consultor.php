<?php

class Consultor extends Eloquent {

	protected $table = 'consultor';

	protected $primaryKey = 'idconsultor';

	protected $fillable = array(
		'usuario_idusuario',
		'nombreconsultor',
		'correoconsultor',
		'telefonoconsultor',
		'apellopaternoconsultor',
		'apellidomaternoconsultor',
		'fotoconsultor',
	);

	public $timestamps = false;

	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario_idusuario');
	}

	public static function crear($input) {
		$respuesta = array();

		if (!Consultor::where('usuario_idusuario', '=', $input['usuario_idusuario'])->count()) {

			$archivoLogo = $input['archivoLogo'];
			$rutaDestino = public_path().'/img/logo_grupo_empresas/';
			$logoEmpresa = "".date('YmdHis')."_".str_replace(" ", "", $archivoLogo->getClientOriginalName());

			$grupoEmpresa                    = new GrupoEmpresa;
			$grupoEmpresa->usuario_idusuario = $input['usuario_idusuario'];
			$grupoEmpresa->nombrelargoge     = $input['nombrelargoge'];
			$grupoEmpresa->nombrecortoge     = $input['nombrecortoge'];
			$grupoEmpresa->correoge          = $input['correoge'];
			$grupoEmpresa->direccionge       = $input['direccionge'];
			$grupoEmpresa->telefonoge        = $input['telefonoge'];
			$grupoEmpresa->logoge            = $rutaDestino.$logoEmpresa;
			$grupoEmpresa->save();

			$logoSubido = $archivoLogo->move($rutaDestino, $logoEmpresa);

			$respuesta['mensaje'] = 'GrupoEmpresa creado!';
			$respuesta['error']   = false;
			$respuesta['data']    = $grupoEmpresa;
		} else {
			$respuesta['mensaje'] = 'La Grupo Empresa ya existe!';
			$respuesta['error']   = true;
			$respuesta['data']    = "";
		}
		return $respuesta;
	}
}