<?php

class ConsultorController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth');
		/*
	$this->beforeFilter('csrf', array('on' => 'post'));

	$this->afterFilter('log', array('only' =>
	array('fooAction', 'barAction')));
	 */
	}

	public function getIndex() {
		return View::make('consultor.index');
	}

	public function getSubirdocpublico() {
		return View::make('consultor.subirdocpublico');
	}

	public function postSubirdocpublico() {

		$usuarioConsultor = false;
		foreach (Auth::user()->roles as $value) {
			if ($value->tiporol == 'consultor') {
				$usuarioConsultor = true;
			}
		}
		if ($usuarioConsultor == false) {
			return Redirect::to('consultor/subirdocpublico')->withInput(Input::except('archivodocumento'))->with('mensaje', 'solo se permite a usuario consultor');
		}

		if (Input::hasFile('archivodocumento')) {
			if (Input::file('archivodocumento')->getMimeType() != "application/pdf") {

				return Redirect::to('consultor/subirdocpublico')->withInput(Input::except('archivodocumento'))->with('mensaje', 'el archivo tiene que ser pdf');
			}
		} else {

			return Redirect::to('consultor/subirdocpublico')->withInput(Input::except('archivodocumento'))->with('mensaje', 'debe subir un archivo pdf');
		}

		$documento = Input::only(
			'titulo_consdocumento',
			'descripcionconsultordocumento',
			'archivodocumento'
		);

		$reglasDocumento = array(
			'titulo_consdocumento'          => 'required',
			'descripcionconsultordocumento' => 'required',
			'archivodocumento'              => 'required',
		);

		$validatorDocumento = Validator::make($documento, $reglasDocumento);

		if ($validatorDocumento->fails()) {

			return Redirect::to('consultor/subirdocpublico')->withInput(Input::except('archivodocumento'))->with('mensaje', 'debe llenar todos los campos');
		} else {

			$documento['archivo'] = Input::file('archivodocumento');
			$documento            = DocumentoConsultor::crear($documento);
			if ($documento['error'] == false) {
				return Redirect::to('consultor/subirdocpublico')->with('mensaje', $documento['mensaje']);
			} else {

				return Redirect::to('consultor/subirdocpublico')->with('mensaje', $documento['mensaje']);

			}

		}

	}
}
