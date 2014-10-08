<?php

Route::get('/', function () {

		if (Auth::check()) {
			return View::make('inicio');
		} else {
			return Redirect::to("login");
		}
		//return Hash::make("asdf");
	});

Route::get('test', function () {

		return Usuario::where('login', "=", "prueba")->first()->roles[0]->tiporol;
		//->rol[0]->tiporol;
	});

Route::controller('login', 'LoginController');
Route::controller('admin', 'AdminController');
Route::controller('consultor', 'ConsultorController');
Route::controller('grupoempresa', 'GrupoempresaController');

Route::get('logout', function () {
		Auth::logout();
		return Redirect::to('/');
	});
