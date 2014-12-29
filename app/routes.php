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

Route::get( 'test' , function () {

	$datos = array(
		"nombreproyecto"     => "Apoyo TIS.",
		"fechafinproyecto"   => "2015-01-04",
		"gestion_id_gestion" => Gestion::all()[0]->id_gestion,
		"id_consultor_log"   => Auth::user()->consultor->idconsultor
		);
	
		print_r( $datos ) ;
		//file_put_contents('php://stdout',  PHP_EOL );

		//return DB::select('SELECT enum_range(NULL::days)');
		//return DB::select('select * from users where id = ?', array('value') );

	});

Route::post( 'test' , function () {
		return date("Ymd_His");
	});
