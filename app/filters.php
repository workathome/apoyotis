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
				return Redirect::guest('login')->with('mensaje', 'Debes identificarte primero.');
			}
		}
	});

Route::filter('admin', function () {
		$is_admin = false;

		foreach (Auth::user()->roles as $key => $value) {
			if ($value->tiporol == "administrador") {
				$is_admin = true;
				break;
			}
		}

		if (Auth::check() and !$is_admin) {
			return Redirect::to('login');
		}
	});

Route::filter('grupo-empresa', function () {
		$is_grupoempresa = false;

		foreach (Auth::user()->roles as $key => $value) {
			if ($value->tiporol == "grupo-empresa") {
				$is_grupoempresa = true;
				break;
			}
		}

		if (Auth::check() and !$is_grupoempresa) {
			return Redirect::to('login');
		}
	});

Route::filter('consultor', function () {
		$is_consultor = false;

		foreach (Auth::user()->roles as $key => $value) {
			if ($value->tiporol == "consultor") {
				$is_consultor = true;
				break;
			}
		}

		if (Auth::check() and !$is_consultor) {
			return Redirect::to('login');
		}
	});

Route::filter('auth.basic', function () {
		return Auth::basic();
	});

Route::filter('guest', function () {
		if (Auth::check()) {return Redirect::to('/');
		}
	}
);

Route::filter('csrf', function () {
		if (Session::token() != Input::get('_token')) {
			throw new Illuminate\Session\TokenMismatchException;
		}
	});
