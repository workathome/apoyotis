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

Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('recuperar', 'AuthController@recuperarContrasenia');
Route::get('logout', 'AuthController@logout');

Route::controller('registro', 'RegistroController');
Route::controller('admin', 'AdminController');
Route::controller('consultor', 'ConsultorController');
Route::controller('grupoempresa', 'GrupoempresaController');
