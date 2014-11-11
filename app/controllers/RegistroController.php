<?php

class RegistroController extends BaseController {

	public function getIndex() {
		if (!Proyecto::vigente()) {
			return Redirect::to("/");
		}
		$datos = array(
			'proyecto'    => Proyecto::vigente(),
			'consultores' => Consultor::lists()
		);
		return View::make('registro.registrogrupoempresa', $datos);
	}

	public function postIndex() {
		if (!Proyecto::vigente()) {
			return Redirect::to("/");
		}

		$usuario      = Input::only('login', 'password');
		$grupoEmpresa = Input::only(
			'nombrelargoge',
			'nombrecortoge',
			'correoge',
			'direccionge',
			'telefonoge',
			'logoge'
		);

		$reglasUsuario = array(
			'login'    => 'required|alpha_num',
			'password' => 'required',
		);

		$validatorUsuario = Validator::make($usuario, $reglasUsuario);

		if ($validatorUsuario           ->fails()) {
			return Redirect::to('registro')->withInput(Input::except('password', 'password2', 'logoge'));
		} else {
			// crando usuario
			$usuario = Usuario::crear($usuario);
		}

		if ($usuario['error'] == false) {
			$datos = array(
				'usuario_idusuario' => $usuario['data']->idusuario,
				'rol_codrol'        => Rol::where("tiporol", "grupo-empresa")->first()->codrol,
			);
			$userrol = UserRol::create($datos);
		} else {
			return Redirect::to('registro')->withInput(Input::except('password', 'password2', 'logoge'));
		}

		//  reglas grupo empresa
		$reglasGE = array(
			'nombrelargoge' => 'required|alpha_spaces_t',
			'nombrecortoge' => 'required|alpha_spaces_t',
			'correoge'      => 'required|email',
			'direccionge'   => 'required|alpha_spaces_t',
			'telefonoge'    => 'required|numeric|digits_between:7,8',
			'logoge'        => 'required|mimes:jpeg,png|max:2000',
		);

		$validatorGE = Validator::make($grupoEmpresa, $reglasGE);

		if ($validatorGE->fails()) {

			return Redirect::to('registro')->withInput(Input::except('password', 'password2', 'logoge'));
		}

		if ($usuario['error'] == false) {
			$grupoEmpresa['usuario_idusuario'] = $usuario['data']->idusuario;
			if (Input::hasFile('logoge')) {
				$grupoEmpresa['archivoLogo'] = Input::file('logoge');
			}
			$grupoEmpresa = GrupoEmpresa::crear($grupoEmpresa);

			if ($grupoEmpresa['error'] == false) {
				return Redirect::to('registro')->with('mensaje', $grupoEmpresa['mensaje']);
			} else {
				return Redirect::to('registro')->with('mensaje', $grupoEmpresa['mensaje']);
			}

		} else {
			return Redirect::to('registro')->withInput(Input::except('password', 'password2', 'logoge'));
		}

	}

}
