<?php

class AutenticacionController extends BaseController {

	public function __construct() {

		$this->beforeFilter('auth', array(
				'except' => array('getLogin', 'postLogin', 'recuperarContrasenia'))
		);
	}

	public function getLogin() {
		return View::make('usuario.login');
	}

	public function postLogin() {
		// esta ruta servirá para iniciar la sesión por medio del correo y la clave
		// para esto utilizamos la función estática attemp de la clase Auth
		// esta función recibe como parámetro un arreglo con el correo y la clave
		// la función attempt se encarga automáticamente se hacer la encriptación de
		//la clave para ser comparada con la que esta en la base de datos.
		$usuario = Input::only('login', 'password');

		if (!$usuario['login'] and !$usuario['password']) {

			return Redirect::to('login')
				->with('mensaje', 'Debe llenar los campos Usuario y Contraseña');
		}

		$validator = Validator::make($usuario, array('login' => 'required'));

		if ($validator->fails()) {

			return Redirect::to('login')
			->with('mensaje', 'Debe llenar el campo Usuario');
		}

		$validator = Validator::make($usuario, array('password' => 'required'));

		if ($validator->fails()) {

			return Redirect::to('login')
			->withInput(Input::except('password'))
			->with('mensaje', 'Debe llenar el campo Contraseña');
		}

		if (Auth::attempt($usuario)) {

			$rol_usuario = Auth::user()->roles[0]->tiporol;

			switch ($rol_usuario) {
				case "administrador":
					return Redirect::to('administrador');
					break;
				case "consultor":
					return Redirect::to('consultor');
					break;
				case "grupo-empresa":
					return Redirect::to('grupoempresa');
					break;
				default:
					return Redirect::to('otros');
					break;
			}

		} else {

			return Redirect::to('login')
				->withInput(Input::except('password'))
				->with('mensaje', 'Ingreso invalido');
		}
	}

	public function recuperarContrasenia() {
		return Redirect::to('login');
	}

	public function logout() {
		Auth::logout();
		return Redirect::to('/');
	}

}
