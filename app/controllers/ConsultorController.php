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
		return Input::all();
		if (Input::hasFile('fotoconsultor')) {
			$archivo = Input::file('fotoconsultor');
		}
	}

}
