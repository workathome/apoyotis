<?php

Route::get('test', function () {

		return Consultor::lists();

		$value = "sadasasdas 33324 - .#./";
		if (preg_match('/^[\pL\sL\dL\.L\-\#\/]+$/u', $value)) {
			return $value;
		} else {
			return "No se permite";
		}

		//return Socio::where('grupo_empresa_usuario_idusuario', '=', Auth::user()->idusuario)->get();
		//lists('nombretipo', 'codtipo_socio');
		//return DocumentoConsultor::find(1)->usuario;
		$aux = trim("/docs_consultor/96/Historias de usuario recopilado.pdf");
		return str_replace(' ', '_', $aux);

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
Route::controller('administrador', 'AdminController');
Route::controller('consultor', 'ConsultorController');
Route::controller('grupoempresa', 'GrupoempresaController');
