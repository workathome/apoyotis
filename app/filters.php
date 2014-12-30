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
			return Redirect::to('autentificarse');
		}
	});


Route::filter( 'grupo-empresa-consultor' , function( $route ) {
		
		$pertenece         = false;
		$consultorEmpresas = Auth::user()->consultor->proyectosAsociados;

		foreach( $consultorEmpresas  as $key => $proyecto ) {

			$idGrupoEmpresa = $proyecto->grupoEmpresa->codgrupo_empresa;
			if ( $idGrupoEmpresa == Request::segment( 3 ) ) {
				$pertenece = true;
				break;
			}
		}

		if ( !$pertenece ) {
			return Redirect::to( '/consultor' );
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


App::error( function( Exception $exception, $code ) {
    
	$pathInfo = Request::getPathInfo();
	$message  = $exception->getMessage() ? : 'Exception';
    Log::error("$code - $message @ $pathInfo\r\n$exception");

    
    if( Config::get('app.debug') ) {
        return;
    }

	$datosError  = $exception->getTrace()[0]['args'][0]->Server();
	$urlRelativa = str_replace('_url=', '', $datosError['QUERY_STRING'] );
	
	$datos = array(
		'message'         => $message,
		'code_error'      => $exception->getStatusCode(),
		'remote_addr'     => $datosError['REMOTE_ADDR'],
		'query_string'    => $datosError['SERVER_NAME']. $urlRelativa,
		'http_user_agent' => $datosError['HTTP_USER_AGENT'],
		'request_method'  => $datosError['REQUEST_METHOD'],
		'location'        => GeoIP::getLocation()
		);

    switch ( $code ) {
        case 403:
            return Response::view( 'errores.403' , $datos , 403 );

        case 500:
            return Response::view( 'errores.500' , $datos , 500 );

        default:
            return Response::view( 'errores.404' , $datos , $code );
    }

});

