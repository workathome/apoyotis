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
		$datos = array(
			'consultores' => Consultor::all()
		);

		return View::make('admin.paneladmin', $datos);
	}

	public function getRegistrarconsultor() {
		return View::make('admin.registrarconsultor');
	}

	public function postRegistrarconsultor() {

		$usuario   = Input::only('login', 'password');
		$consultor = Input::only(
			'nombreconsultor',
			'apellidopaternoconsultor',
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

		if ($validatorUsuario->fails()) {

			return Redirect::to('administrador/registrarconsultor')->withInput(Input::except('password', 'password2', 'fotoconsultor'));
		}

		$reglasConsultor = array(
			'nombreconsultor'          => 'required',
			'apellidopaternoconsultor' => 'required',
			'apellidomaternoconsultor' => 'required',
			'correoconsultor'          => 'required',
			'telefonoconsultor'        => 'required',
			'fotoconsultor'            => 'required|mimes:jpeg,png|max:4000',
		);

		$validatorConsultor = Validator::make($consultor, $reglasConsultor);

		if ($validatorConsultor->fails()) {

			Redirect::to('administrador/registrarconsultor')->withInput(Input::except('password', 'password2', 'fotoconsultor'));
		}

		if (!Input::hasFile('fotoconsultor')) {
			Redirect::to('administrador/registrarconsultor')->withInput(Input::except('password', 'password2', 'fotoconsultor'));
		}

		$usuario = Usuario::crear($usuario);

		if ($usuario['error'] == false) {
			$consultor['usuario_idusuario'] = $usuario['data']->idusuario;
			$consultor['usuario_login']     = $usuario['data']->login;
			if (Input::hasFile('fotoconsultor')) {
				$consultor['archivoFoto'] = Input::file('fotoconsultor');
			}

			$consultor = Consultor::crear($consultor);

			if ($consultor['error'] == false) {
				$datos = array(
					'usuario_idusuario' => $usuario['data']->idusuario,
					'rol_codrol'        => Rol::where("tiporol", "consultor")->first()->codrol,
				);
				$userrol = UserRol::create($datos);
				return Redirect::to('administrador/registrarconsultor')->with('mensaje', $consultor['mensaje']);
			} else {
				return Redirect::to('administrador/registrarconsultor')->with('mensaje', $consultor['mensaje']);
			}

		} else {
			return Redirect::to('administrador/registrarconsultor')->withInput(Input::except('password', 'password2', 'fotoconsultor'));
		}

	}

}
