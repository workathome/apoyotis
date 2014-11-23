<?php

class ProyectoController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth');
		$this->beforeFilter('consultor');
		/*
	$this->beforeFilter('csrf', array('on' => 'post'));

	$this->afterFilter('log', array('only' =>
	array('fooAction', 'barAction')));
        */
	}

	public function getIndex() {
		$datos = array(
			'proyecto'            => Proyecto::vigente(),
			'documentos_empresas' => GrupoEmpresaDocumento::with('grupoempresa')->get(),
                        'documentos_proyecto' => Proyecto::vigente()->documentos,
                        'empresitas'=>ConsultorProyectoGrupoEmpresa::ConsultorEmpresas()
		);

		return View::make('proyecto.index', $datos);
	}

	public function getSubirdocumento() {
		$datos = array(
			'documentos_consultor' => DocumentoConsultor::where("consultor_usuario_idusuario", Auth::user()->idusuario)->get()
		);
		return View::make('proyecto.subirdocpublico', $datos);
	}

	public function postSubirdocumento() {

		$usuarioConsultor = false;
		foreach (Auth::user()->roles as $value) {
			if ($value->tiporol == 'consultor') {
				$usuarioConsultor = true;
			}
		}
		$mensaje = array('alert-danger', 'solo se permite a usuario consultor');
		if ($usuarioConsultor == false) {
			return Redirect::to('/consultor/proyecto/subirdocpublico')
				->withInput(Input::except('archivodocumento'))
				->with('mensaje', $mensaje);
		}
		/*
		"alert-success"
		"alert-info"
		"alert-warning"
		"alert-danger"
		 */

		$documento = Input::only(
			"titulo_documento",
			'archivodocumento'
		);

		$reglasDocumento = array(
			'titulo_documento' => 'required|alpha_spaces_t',
			'archivodocumento' => 'required|mimes:pdf',
		);

		$validatorDocumento = Validator::make($documento, $reglasDocumento);

		if ($validatorDocumento->fails()) {

			$mensaje = array('alert-danger', 'Revise los campos del formulario');
			return Redirect::to('consultor/proyecto')
				->withErrors($validatorDocumento)
				->withInput(Input::except('archivodocumento'))
				->with('mensaje', $mensaje);
		} else {
			if (Input::hasFile('archivodocumento')) {
				if (Input::file('archivodocumento')->getMimeType() != "application/pdf") {

					$mensaje = array('alert-danger', 'debe subir un archivo en formato pdf');
					return Redirect::to('consultor/proyecto')
						->withInput(Input::except('archivodocumento'))
						->with('mensaje', $mensaje);
				}
			} else {

				$mensaje = array('alert-danger', 'debe subir un archivo en formato pdf');
				return Redirect::to('consultor/proyecto')
					->withInput(Input::except('archivodocumento'))
					->with('mensaje', $mensaje);
			}

			$documento['archivo'] = Input::file('archivodocumento');
			$documento            = ProyectoDocumento::crear($documento);

			if ($documento['error'] == false) {

				$mensaje = array('alert-success', $documento['mensaje']);
				return Redirect::to('consultor/proyecto')->with('mensaje', $mensaje);
			} else {

				$mensaje = array('alert-warning', $documento['mensaje']);
				return Redirect::to('consultor/proyecto')->with('mensaje', $mensaje);

			}
		}

	}

}
