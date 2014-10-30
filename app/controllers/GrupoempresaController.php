<?php

class GrupoempresaController extends BaseController {
	/*
	public function __construct() {
	$this->beforeFilter('auth');
	}
	 */

	public function getIndex() {
		$datos = array(
			'documentos' => GrupoEmpresa::where("usuario_idusuario", Auth::user()->idusuario)->first()->documentos
		);

		return View::make('grupoempresa.index', $datos);
	}

	public function getSubirdocumento() {
		return View::make('grupoempresa.subirdocumento');
	}

	public function postSubirdocumento() {
		$usuarioConsultor = false;

		foreach (Auth::user()->roles as $value) {
			if ($value->tiporol == 'grupo-empresa') {
				$usuarioGrupoEmpresa = true;
			}
		}
		if ($usuarioGrupoEmpresa == false) {
			return Redirect::to('grupoempresa/subirdocumento')->withInput(Input::except('archivodocumento'))->with('mensaje', 'solo se permite a usuario grupoempresa');
		}

		if (Input::hasFile('archivodocumento')) {
			if (Input::file('archivodocumento')->getMimeType() != "application/pdf") {

				return Redirect::to('grupoempresa/subirdocumento')->withInput(Input::except('archivodocumento'))->with('mensaje', 'el archivo tiene que ser pdf');
			}
		} else {

			return Redirect::to('grupoempresa/subirdocumento')->withInput(Input::except('archivodocumento'))->with('mensaje', 'debe subir un archivo pdf');
		}

		$documento = Input::only(
			'titulo_gedocumento',
			'descripciongedocumento',
			'archivodocumento'
		);

		$reglasDocumento = array(
			'titulo_gedocumento'     => 'required',
			'descripciongedocumento' => 'required',
			'archivodocumento'       => 'required',
		);

		$validatorDocumento = Validator::make($documento, $reglasDocumento);

		if ($validatorDocumento->fails()) {

			return Redirect::to('grupoempresa/subirdocumento')->withInput(Input::except('archivodocumento'))->with('mensaje', 'debe llenar todos los campos');
		} else {

			$documento['archivo'] = Input::file('archivodocumento');
			$documento            = GrupoEmpresaDocumento::crear($documento);
			if ($documento['error'] == false) {
				return Redirect::to('grupoempresa/subirdocumento')->with('mensaje', $documento['mensaje']);
			} else {

				return Redirect::to('grupoempresa/subirdocumento')->with('mensaje', $documento['mensaje']);

			}

		}
	}

	public function getRegistrarsocio() {
		$datos = array(
			'tiposocio' => DB::table('tipo_socio')->lists('nombretipo', 'codtipo_socio'),
		);
		return View::make('grupoempresa.registrarsocio', $datos);
	}
	public function postRegistrarsocio() {
		return Input::all();
	}

}
