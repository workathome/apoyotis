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

Route::get('/', 'InicioController@inicio');
Route::controller('login', 'LoginController');
Route::controller('registro', 'RegistroController');
Route::controller('admin', 'AdminController');
Route::controller('consultor', 'ConsultorController');
Route::controller('grupoempresa', 'GrupoempresaController');

Route::get('logout', function () {
		Auth::logout();
		return Redirect::to('/');
	});
