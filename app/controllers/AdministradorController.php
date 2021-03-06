<?php

class AdministradorController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth', array('except' => 'getLogin'));

	}

	/**
	 * Devuelve el area de trabajo
	 * del administrador
	 *
	 * @return vista
	 */
	public function getIndex() {
		$datos = array(
			'consultores' => Consultor::all()
		);

		return View::make('administrador.panel_administrador', $datos);
	}

	/**
	 * Crea usuarios consultores
	 *
	 * @return index
	 */
	public function postIndex() {

		$usuario   = Input::only('login', 'password');
		$consultor = Input::only(
			'nombreconsultor',
			'apellidopaternoconsultor',
			'apellidomaternoconsultor',
			'correoconsultor',
			'telefonoconsultor',
			'fotoconsultor'
		);

		$reglasUsuario = array(
			'login'    => 'required',
			'password' => 'required',
		);

		$validatorUsuario = Validator::make($usuario, $reglasUsuario);

		if ($validatorUsuario->fails()) {

			return Redirect::to('administrador')
			->withInput(Input::except(
					'password',
					'password2',
					'fotoconsultor')
			);
		}

		$reglasConsultor = array(
			'nombreconsultor'          => 'required',
			'apellidopaternoconsultor' => 'required',
			'apellidomaternoconsultor' => 'required',
			'correoconsultor'          => 'required',
			'telefonoconsultor'        => 'required',
			'fotoconsultor'            => 'required|mimes:jpeg,png|max:4000',
		);

		$validatorConsultor = Validator::make($consultor, $reglasConsultor);

		if ($validatorConsultor->fails()) {

			Redirect::to('/administrador')
			->withInput(Input::except('password', 'password2', 'fotoconsultor'));
		}

		if (!Input::hasFile('fotoconsultor')) {

			Redirect::to('/administrador')
				->withInput(Input::except('password', 'password2', 'fotoconsultor'));
		}

		$usuario = Usuario::crear($usuario);

		if ($usuario['error'] == false) {

			$consultor['usuario_idusuario'] = $usuario['data']->idusuario;
			$consultor['usuario_login']     = $usuario['data']->login;

			if (Input::hasFile('fotoconsultor')) {
				$consultor['archivoFoto'] = Input::file('fotoconsultor');
			}

			$consultor = Consultor::crear($consultor);

			if ($consultor['error'] == false) {

				$codigo_rol = Rol::where("tiporol", "consultor")->first()->codrol;

				$datos = array(
					'usuario_idusuario' => $usuario['data']->idusuario,
					'rol_codrol'        => $codigo_rol,
				);

				$usuario_rol = UsuarioRol::create($datos);

				return Redirect::to('/administrador')
					->with('mensaje', $consultor['mensaje']);

			} else {
				return Redirect::to('/administrador')
					->with('mensaje', $consultor['mensaje']);
			}

		} else {
			return Redirect::to('administrador')
				->withInput(Input::except('password', 'password2', 'fotoconsultor'));
		}

	}

}
