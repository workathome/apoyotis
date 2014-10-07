<?php

Route::get('/', function () {

		if (Auth::check()) {
			return View::make('inicio');
		} else {
			return Redirect::to("login");
		}
		//return Hash::make("asdf");
	});

// esta sera la ruta principal de nuestra aplicación
// aquí va a estar el formulario para registrase y para inicio de sesión
// esta ruta debe ser publica y por lo tanto no debe llegar el filtro auth
Route::get('login', function () {
		return View::make('usuario.login');
	});

// esta ruta sera para crear al usuario
Route::post('registro', function () {
		$input = Input::all();
		$input['password'] = Hash::make($input['password']);
		$resultado = Usuario::crear($input);
		return Redirect::to('login')->with('mensaje_registro', $resultado['mensaje']);
	});

// esta ruta servirá para iniciar la sesión por medio del correo y la clave
// para esto utilizamos la función estática attemp de la clase Auth
// esta función recibe como parámetro un arreglo con el correo y la clave
Route::post('login', function () {
		// la función attempt se encarga automáticamente se hacer la encriptación de
		//la clave para ser comparada con la que esta en la base de datos.
		$usuario = Input::only('login', 'password');
		if (Auth::attempt($usuario)) {
			return Redirect::to('/');
		}
		//return Redirect::to('hello');
		 else {
			return Redirect::to('login')->with('mensaje_login', 'Ingreso invalido');
		}
	}
);

Route::get('logout', function () {
		Auth::logout();
		return Redirect::to('/');
	});
