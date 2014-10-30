<?php

class GrupoempresaController extends BaseController {
	/*
	public function __construct() {
	$this->beforeFilter('auth');
	}
	 */

	public function getIndex() {
		return View::make('grupoempresa.index');
	}

	public function getSubirdocumento() {
		return View::make('grupoempresa.subirdocumento');
	}

	public function postSubirdocumento() {
		return Input::all();
	}

}
