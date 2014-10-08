<?php

class LoginController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth', array('except' => array('getIndex', 'postIndex')));
		/*
	$this->beforeFilter('csrf', array('on' => 'post'));

	$this->afterFilter('log', array('only' =>
	array('fooAction', 'barAction')));
	 */
	}

	public function getIndex() {
		return View::make('usuario.login');
	}

	public function postIndex() {
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
		}
		//		return Redirect::to('login')->with('mensaje_login', 'Ingreso invalido');
	}

	/*
Route::post('registro', function () {
$input = Input::all();
$input['password'] = Hash::make($input['password']);
$resultado = Usuario::crear($input);
return Redirect::to('login')->with('mensaje_registro', $resultado['mensaje']);
});

 */

}