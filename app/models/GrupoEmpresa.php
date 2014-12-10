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
	public $timestamps = false;

	public function usuario() {
		return $this->belongsTo('Usuario', 'usuario_idusuario');
	}

	public function socios() {
		return $this->hasMany('Socio', 'grupo_empresa_codgrupo_empresa', 'codgrupo_empresa');
	}

	public function proyectoAsociado() {
		return $this->hasOne('ConsultorProyectoGrupoEmpresa', 'grupo_empresa_codgrupo_empresa', 'codgrupo_empresa');
	}

	public function propuestaPago() {
		return $this->hasOne('PropuestaPago', 'grupo_empresa_codgrupo_empresa', 'codgrupo_empresa');
	}

	/*
	public function documentos() {
	return $this->hasMany('GrupoEmpresaDocumento', 'grupo_empresa_codgrupo_empresa', 'codgrupo_empresa');
	}
	 */

	public static function crear($input) {
		$respuesta = array();

		if (!GrupoEmpresa::where('usuario_idusuario', '=', $input['usuario_idusuario'])->count()) {

			$archivoLogo = $input['archivoLogo'];
			$rutaDestino = '/img/logo_grupo_empresas/';
			$logoEmpresa = "".date('YmdHis')."_".str_replace(" ", "", $archivoLogo->getClientOriginalName());

			$grupoEmpresa = new GrupoEmpresa;

			$grupoEmpresa->usuario_idusuario = $input['usuario_idusuario'];
			$grupoEmpresa->nombrelargoge     = $input['nombrelargoge'];
			$grupoEmpresa->nombrecortoge     = $input['nombrecortoge'];
			$grupoEmpresa->correoge          = $input['correoge'];
			$grupoEmpresa->direccionge       = $input['direccionge'];
			$grupoEmpresa->telefonoge        = $input['telefonoge'];
			$grupoEmpresa->logoge            = $rutaDestino.$logoEmpresa;
			$grupoEmpresa->save();

			$rutaDestino = public_path().$rutaDestino;
			$logoSubido  = $archivoLogo->move($rutaDestino, $logoEmpresa);

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

	public static function representanteLegal($id_grupo_empresa) {
		$grupoEmpresa       = static ::find($id_grupo_empresa);
		$socios             = $grupoEmpresa->socios;
		$representanteLegal = "";

		foreach ($socios as $socio) {
			if ($socio->tipoSocio->nombretipo == "representante legal") {
				$representanteLegal = $socio->nombresocio;
				$representanteLegal .= " ".$socio->apellidossocio;
				break;
			}
		}

		return $representanteLegal;
	}

}
