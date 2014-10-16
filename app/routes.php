<?php

Route::get('test', function () {

		//return DocumentoConsultor::find(1)->usuario;
		$usuarioConsultor = false;
		foreach (Auth::user()->roles as $value) {
			if ($value->tiporol == 'consultor') {
				$usuarioConsultor = true;
			}
		}
		return ($usuarioConsultor == true)?"es consultor":"no es consultor";

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
