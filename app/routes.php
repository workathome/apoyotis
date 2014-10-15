<?php

Route::get('test', function () {
		$datos = array(
			'login'      => 'avenod',
			'password'   => "asdf",
			'habilitada' => true,
		);
		$usuario = Usuario::create($datos);
		return $usuario->idusuario;
	});

Route::get('/', function () {

		if (Auth::check()) {
			return View::make('inicio');
		} else {
			return Redirect::to("login");
		}
		//return Hash::make("asdf");
	});

Route::controller('login', 'LoginController');
Route::controller('registro', 'RegistroController');
Route::controller('admin', 'AdminController');
Route::controller('consultor', 'ConsultorController');
Route::controller('grupoempresa', 'GrupoempresaController');

Route::get('logout', function () {
		Auth::logout();
		return Redirect::to('/');
	});
