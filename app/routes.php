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
		DB::setFetchMode(PDO::FETCH_ASSOC);
		$rango_dias = DB::select('SELECT enum_range(NULL::days)');
		DB::setFetchMode(PDO::FETCH_CLASS);

		print_r($rango_dias[0]['enum_range']);

		//return DB::select('SELECT enum_range(NULL::days)');
		//return DB::select('select * from users where id = ?', array('value') );

	});

Route::post('test', function () {
		return date("Ymd_His");
	});
