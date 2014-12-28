<?php

class RegistroController extends BaseController {

	public function getIndex() {
		
		if ( !Proyecto::vigente() ) {
			return Redirect::to("/");
		}
		$datos = array(
			'proyecto'    => Proyecto::vigente(),
			'consultores' => Consultor::lista()
		);
		return View::make('registro.registro_grupo_empresa', $datos);
	}

	public function postIndex() {

		if ( !Proyecto::vigente() ) {
			return Redirect::to("/");
		}

		$usuario = Input::only('login', 'password');

		$grupoEmpresa = Input::only(
			'nombrelargoge',
			'nombrecortoge',
			'correoge',
			'direccionge',
			'telefonoge',
			'logoge',
			'idconsultor'
		);

		$reglasUsuario = array(
			'login'    => 'required|alpha_num',
			'password' => 'required',
		);

		//  reglas grupo empresa

		$reglasGE = array(
			'nombrelargoge' => 'required|alpha_spaces_t',
			'nombrecortoge' => 'required|alpha_spaces_t',
			'correoge'      => 'required|email',
			'direccionge'   => 'required|alpha_spaces_t',
			'telefonoge'    => 'required|numeric|digits_between:7,8',
			'logoge'        => 'required|mimes:jpeg,png|max:2000',
			'idconsultor'   => 'required|numeric',
		);

		$validatorUsuario = Validator::make($usuario, $reglasUsuario);

		if ($validatorUsuario->fails()) {
			return Redirect::to('registro')
			->withErrors($validatorUsuario)
			->withInput(Input::except('password', 'password2', 'logoge'))
			->with('mensaje', 'Revise los campos del formulario');
		}

		$validatorGE = Validator::make($grupoEmpresa, $reglasGE);

		if ( $validatorGE->fails() ) {
			return Redirect::to('registro')
			->withErrors( $validatorGE )
			->withInput( Input::except( 'password' , 'password2' , 'logoge' ) )
			->with('mensaje', 'Revise los campos del formulario' );
		}

		//Comprobando que no existe una grupo empresa registrada
		$nombrecortoge = $grupoEmpresa['nombrecortoge'];
		$nombrelargoge = $grupoEmpresa['nombrelargoge'];
		
		if ( GrupoEmpresa::existe( $nombrecortoge , $nombrelargoge ) ) {
			return Redirect::to('registro')
			->withInput( Input::except( 'password' , 'password2' , 'logoge' ) )
			->with('mensaje', "{$nombrelargoge} ya esta registrado" );			
		}

		// creando usuario
		$usuario = Usuario::crear( $usuario );

		if ( $usuario['error'] == false ) {
			$datos = array(
				'usuario_idusuario' => $usuario['data']->idusuario,
				'rol_codrol'        => Rol::idRolGrupoEmpresa()
			);

			// asignando rol a usuario
			$userrol = UsuarioRol::create( $datos );

			// creando grupo empresa
			$grupoEmpresa['usuario_idusuario'] = $usuario['data']->idusuario;
			
			if ( Input::hasFile('logoge') ) {
				$grupoEmpresa['archivoLogo'] = Input::file('logoge');
			}

			$grupoEmpresa = GrupoEmpresa::crear( $grupoEmpresa );

			if ( $grupoEmpresa['error'] ) {
				return Redirect::to('registro')->with('mensaje', $grupoEmpresa['mensaje']);
			}

			// asignando grupo empresa a proyecto
			$proyecto_adjudicado = ConsultorProyectoGrupoEmpresa::create(array(
					"grupo_empresa_codgrupo_empresa"  => $grupoEmpresa['data']->codgrupo_empresa,
					"proyecto_codproyecto"            => Proyecto::vigente()->codproyecto,
					"grupo_empresa_usuario_idusuario" => $grupoEmpresa['data']->usuario_idusuario,
					"consultor_idconsultor"           => Input::get('idconsultor')

				));

			return Redirect::to('registro')->with('mensaje', "Empresa ".Input::get('nombrelargoge')." creada" );

		} else {
			return Redirect::to('registro')
				->withInput( Input::except( 'password' , 'password2' , 'logoge' ) )
				->with( 'mensaje' , $usuario['mensaje'] );
		}

	}

}
