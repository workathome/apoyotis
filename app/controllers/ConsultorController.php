<?php

class ConsultorController extends BaseController {

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
			'documentos_empresas' => GrupoEmpresaDocumento::with('grupoempresa')->get(),
		);

		return View::make('consultor.index', $datos);
	}

	public function getGrupoempresas() {
		$datos = array(
			'empresas' => GrupoEmpresa::with('socios')->get()
		);
		return View::make('consultor.grupoempresas', $datos);

	}

	public function getCrearproyecto() {
		if (Proyecto::vigente()) {
			return Redirect::back();
		}
		return View::make('consultor.crearproyecto');

	}

	public function postCrearproyecto() {

		$reglasProyecto = array(
			'nombreproyecto'   => 'required|alpha_spaces_t',
			'fechafinproyecto' => 'required|date_format:Y-m-d H:i:s',
		);

		$validadorProyecto = Validator::make(Input::all(), $reglasProyecto);

		if ($validadorProyecto->fails()) {
			$mensaje = array('alert-danger', 'Revise los campos del formulario');
			return Redirect::to('consultor/crearproyecto')
				->withErrors($validadorProyecto)
				->withInput(Input::except('archivodocumento'))
				->with('mensaje', $mensaje);
		} else {

			$proyecto = Proyecto::create(array(
					"nombreproyecto"     => Input::get('nombreproyecto'),
					"fechafinproyecto"   => Input::get('fechafinproyecto'),
					"gestion_id_gestion" => Gestion::all()[0]->id_gestion,
					"id_consultor_log"   => Auth::user()->consultor->idconsultor
				));

			return $proyecto;
		}

	}

	public function getSubirdocpublico() {
		$datos = array(
			'documentos_consultor' => DocumentoConsultor::where("consultor_usuario_idusuario", Auth::user()->idusuario)->get()
		);

		return View::make('consultor.subirdocpublico', $datos);
	}

	public function postSubirdocpublico() {

		$usuarioConsultor = false;
		foreach (Auth::user()->roles as $value) {
			if ($value->tiporol == 'consultor') {
				$usuarioConsultor = true;
			}
		}
		$mensaje = array('alert-danger', 'solo se permite a usuario consultor');
		if ($usuarioConsultor == false) {
			return Redirect::to('consultor/subirdocpublico')->withInput(Input::except('archivodocumento'))->with('mensaje', $mensaje);
		}
		/*
		"alert-success"
		"alert-info"
		"alert-warning"
		"alert-danger"
		 */

		$documento = Input::only(
			'titulo_consdocumento',
			'descripcionconsultordocumento',
			'archivodocumento'
		);

		$reglasDocumento = array(
			'titulo_consdocumento'          => 'required|alpha_spaces',
			'descripcionconsultordocumento' => 'required|alpha_spaces',
			'archivodocumento'              => 'required|mimes:pdf',
		);

		$validatorDocumento = Validator::make($documento, $reglasDocumento);

		if ($validatorDocumento->fails()) {

			$mensaje = array('alert-danger', 'debe llenar todos los campos');
			return Redirect::to('consultor/subirdocpublico')->withInput(Input::except('archivodocumento'))->with('mensaje', $mensaje);
		} else {

			if (Input::hasFile('archivodocumento')) {
				if (Input::file('archivodocumento')->getMimeType() != "application/pdf") {

					$mensaje = array('alert-danger', 'debe subir un archivo en formato pdf');
					return Redirect::to('consultor/subirdocpublico')->withInput(Input::except('archivodocumento'))->with('mensaje', $mensaje);
				}
			} else {

				$mensaje = array('alert-danger', 'debe subir un archivo en formato pdf');
				return Redirect::to('consultor/subirdocpublico')->withInput(Input::except('archivodocumento'))->with('mensaje', $mensaje);
			}

			$documento['archivo'] = Input::file('archivodocumento');
			$documento            = DocumentoConsultor::crear($documento);
			if ($documento['error'] == false) {

				$mensaje = array('alert-success', $documento['mensaje']);
				return Redirect::to('consultor/subirdocpublico')->with('mensaje', $mensaje);
			} else {

				$mensaje = array('alert-warning', $documento['mensaje']);
				return Redirect::to('consultor/subirdocpublico')->with('mensaje', $mensaje);

			}

		}

	}
}
