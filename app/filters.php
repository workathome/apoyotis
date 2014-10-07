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
		if (Auth::check() and Auth::user()->login == 'admin') {
			return Redirect::to('admin');
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
