<?php

Route::get('test', function () {

		return Actividad::all()[0]->cod_actividad;

		$value = "sadasasdas 33324 - .#./";
		if (preg_match('/^[\pL\sL\dL\.L\-\#\/]+$/u', $value)) {
			return $value;
		} else {
			return "No se permite";
		}
		$aux = trim("/docs_consultor/96/Historias de usuario recopilado.pdf");
		return str_replace(' ', '_', $aux);
	});

Route::get('/', 'InicioController@inicio');

Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('recuperar', 'AuthController@recuperarContrasenia');
Route::get('logout', 'AuthController@logout');

Route::controller('consultor/proyecto', 'ProyectoController');
Route::controller('registro', 'RegistroController');
Route::controller('administrador', 'AdminController');
Route::controller('grupoempresa', 'GrupoempresaController');
Route::controller('consultor', 'ConsultorController');
