<?php

App::before(function ($request) {
		//
	});

App::after(function ($request, $response) {
		//
	});

Route::filter('auth', function () {
		if (Auth::guest()) {
			if (Request::ajax()) {
				return Response::make('Unauthorized', 401);
			} else {
				return Redirect::guest('autentificarse')
					->with('mensaje', 'Debes identificarte primero.');
			}
		}
	});

Route::filter('admin', function () {
		$es_administrador = false;

		if (Auth::guest()) {
			return Redirect::to('autentificarse');
		}

		foreach (Auth::user()->roles as $rol) {
			if ($rol->tiporol == "administrador") {
				$es_administrador = true;
				break;
			}
		}

		if (Auth::check() and !$es_administrador) {
			return Redirect::to('autentificarse');
		}
	});

Route::filter('grupo-empresa', function () {
		$es_grupo_empresa = false;

		if (Auth::guest()) {
			return Redirect::to('autentificarse');
		}

		foreach (Auth::user()->roles as $rol) {
			if ($rol->tiporol == "grupo-empresa") {
				$es_grupo_empresa = true;
				break;
			}
		}

		if (Auth::check() and !$es_grupo_empresa) {
			return Redirect::to('autentificarse');
		}
	});

Route::filter('consultor', function () {
		$es_consultor = false;

		if (Auth::guest()) {
			return Redirect::to('autentificarse');
		}

		foreach (Auth::user()->roles as $rol) {
			if ($rol->tiporol == "consultor") {
				$es_consultor = true;
				break;
			}
		}

		if (Auth::check() and !$es_consultor) {
			return Redirect::to('login');
		}
	});

Route::filter('auth.basic', function () {
		return Auth::basic();
	});

Route::filter('guest', function () {
		if (Auth::check()) {return Redirect::to('/');}
	}
);

Route::filter('csrf', function () {
		if (Session::token() != Input::get('_token')) {
			throw new Illuminate\Session\TokenMismatchException;
		}
	});
