<?php

class AdminController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth', array('except' => 'getLogin'));
		/*
	$this->beforeFilter('csrf', array('on' => 'post'));

	$this->afterFilter('log', array('only' =>
	array('fooAction', 'barAction')));
	 */
	}

	public function getIndex() {
		return View::make('admin.paneladmin');
	}

	public function getRegistrarconsultor() {
		return View::make('admin.registrarconsultor');
	}

	public function postRegistrarconsultor() {

		$usuario   = Input::only('login', 'password');
		$consultor = Input::only(
			'nombreconsultor',
			'apellopaternoconsultor',
			'apellidomaternoconsultor',
			'correoconsultor',
			'telefonoconsultor',
			'fotoconsultor'
		);

		$reglasUsuario = array(
			'login'    => 'required',
			'password' => 'required',
		);

		$validatorUsuario = Validator::make($usuario, $reglasUsuario);
		if ($validatorUsuario                           ->fails()) {
			return Redirect::to('admin/registrarconsultor')->withInput(Input::except('password', 'password2'));
		}

		$reglasConsultor = array(
			'nombreconsultor'          => 'required',
			'apellopaternoconsultor'   => 'required',
			'apellidomaternoconsultor' => 'required',
			'correoconsultor'          => 'required',
			'telefonoconsultor'        => 'required',
			'fotoconsultor'            => 'required',
		);

		$validatorConsultor = Validator::make($consultor, $reglasConsultor);

		if ($validatorConsultor                         ->fails()) {
			return Redirect::to('admin/registrarconsultor')->withInput(Input::except('password', 'password2'));
		} else {
			return Input::all();
		}

		/*

	if ($validatorUsuario                           ->fails()) {
	return Redirect::to('admin/registrarconsultor')->withInput(Input::except('password', 'password2'));
	} else {
	$usuario = Usuario::crear($usuario);
	}
	//  reglas grupo empresa
	$reglasConsultor = array(
	'nombreconsultor'          => 'required',
	'apellopaternoconsultor'   => 'required',
	'apellidomaternoconsultor' => 'required',
	'correoconsultor'          => 'required',
	'telefonoconsultor'        => 'required',
	'fotoconsultor'            => 'required',
	);

	$validatorConsultor = Validator::make($consultor, $reglasGE);

	if ($validatorConsultor                         ->fails()) {
	return Redirect::to('admin/registrarconsultor')->withInput(Input::except('password', 'password2'));
	}
	if ($usuario['error'] == false) {
	$consultor['usuario_idusuario'] = $usuario['data']->idusuario;
	if (Input::hasFile('fotoconsultor')) {
	$consultor['archivoFoto'] = Input::file('fotoconsultor');
	}
	$consultor = Consultor::crear($consultor);

	if ($consultor['error'] == false) {
	return Redirect::to('admin/registrarconsultor')->with('mensaje', $consultor['mensaje']);
	} else {
	return Redirect::to('admin/registrarconsultor')->with('mensaje', $consultor['mensaje']);
	}

	} else {
	return Redirect::to('admin/registrarconsultor')->withInput(Input::except('password', 'password2'));
	}
	 */

	}

}
