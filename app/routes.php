<?php

Route::get('/', 'InicioController@inicio');

Route::get('login', 'AutenticacionController@getLogin');
Route::post('login', 'Autenticacion@postLogin');
Route::get('recuperar', 'Autenticacion@recuperarContrasenia');
Route::get('logout', 'Autenticacion@logout');

Route::controller('consultor/proyecto', 'ProyectoController');
Route::controller('registro', 'RegistroController');
Route::controller('administrador', 'AdministradorController');
Route::controller('grupoempresa', 'GrupoEmpresaController');
Route::controller('consultor', 'ConsultorController');

// Pruebas

Route::get('test', function () {

		$plantilla = "";
		foreach (Latex::test() as $value) {
			$plantilla .= $value;
		}
		$datos = array(
			"esqueleto" => $plantilla,
			"pdf"       => null
		);
		return View::make('test', $datos);
	});

Route::post('test', function () {
		$datos = array(
			"esqueleto" => Input::get('latex'),
			"pdf"       => Latex::generar(Input::get("latex"))
		);

		return View::make('test', $datos);
	});
