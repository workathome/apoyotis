<?php

Route::get('test',

	function () {
		return ConsultorProyectoGrupoEmpresa::ConsultorEmpresas();
		/*$archivo_sql = file("./schema_refactor.sql");
		$plantilla = "";
		foreach ($archivo_sql as $key => $value) {
		$plantilla .= $value;
		}
		return DB::select(DB::raw($plantilla));
		 */
		$plantilla = "";
		foreach (Latex::test() as $key => $value) {
			$plantilla .= $value;
		}
		$datos = array(
			"esqueleto" => $plantilla,
			"pdf"       => null
		);
		return View::make('test', $datos);

		//return Response::json(array("success" => true));
		/*
	$value = "sadasasdas 33324 - .#./";
	if (preg_match('/^[\pL\sL\dL\.L\-\#\/]+$/u', $value)) {
	return $value;
	} else {
	return "No se permite";
	}
	$aux = trim("/docs_consultor/96/Historias de usuario recopilado.pdf");
	return str_replace(' ', '_', $aux);
	 */
	});

Route::post('test', function () {
		$datos = array(
			"esqueleto" => Input::get('latex'),
			"pdf"       => Latex::generar(Input::get("latex"))
		);

		return View::make('test', $datos);
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
