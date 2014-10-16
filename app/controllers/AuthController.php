<?php

class AuthController extends BaseController {
	public function __construct() {
		$this->beforeFilter('auth', array('except' => array('getLogin', 'postLogin', 'recuperarContrasenia')));
		/*
	$this->beforeFilter('csrf', array('on' => 'post'));

	$this->afterFilter('log', array('only' =>
	array('fooAction', 'barAction')));
	 */
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
		if (Auth::attempt($usuario)) {
			$rol_usuario = Auth::user()->roles[0]->tiporol;

			if ($rol_usuario == "administrador") {
				return Redirect::to('admin');
			}
			if ($rol_usuario == "consultor") {
				return Redirect::to('consultor');
			}
			if ($rol_usuario == "grupo-empresa") {
				return Redirect::to('grupoempresa');
			} else {
				return Redirect::to('otros');
			}
		} else {
			return Redirect::to('login')->with('mensaje', 'Ingreso invalido');
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
