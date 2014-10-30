<?php

Route::get('test', function () {

		return GrupoEmpresa::where("usuario_idusuario", Auth::user()->idusuario)->with('documentos')->get();
		//return DocumentoConsultor::find(1)->usuario;
		$aux = trim("       hola como estas");
		return $aux.replace(" ", "_");
		//return DocumentoConsultor::all()[0]->nombredocumento;
		//// '2014-04-20 19:02:09' will become 'Apr 20, 2014'
		//$user->created_at->toFormattedDateString();

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
