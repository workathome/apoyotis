<?php

Route::get('/', 'InicioController@inicio');

Route::get('autentificarse', 'AutenticacionController@getAutentificarse');
Route::post('autentificarse', 'AutenticacionController@postAutentificarse');
Route::get('recuperar', 'AutenticacionController@recuperarContrasenia');
Route::get('salir', 'AutenticacionController@salir');

Route::controller('consultor/proyecto', 'ProyectoController');
Route::controller('registro', 'RegistroController');
Route::controller('administrador', 'AdministradorController');
Route::controller('grupoempresa', 'GrupoEmpresaController');
Route::controller('consultor', 'ConsultorController');

// Pruebas

Route::get('test', function () {
		return ConsultorProyectoGrupoEmpresa::all()[0]->planPago;

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
