<?php

class RegistroController extends BaseController {

	public function getIndex() {
		return View::make('registro.registrogrupoempresa');
	}

	public function postIndex() {

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
			'login'    => 'required',
			'password' => 'required',
		);

		$validatorUsuario = Validator::make($usuario, $reglasUsuario);

		if ($validatorUsuario           ->fails()) {
			return Redirect::to('registro')->withInput(Input::except('password', 'password2', 'logoge'));
		} else {
			$usuario = Usuario::crear($usuario);
		}
		//  reglas grupo empresa
		$reglasGE = array(
			'nombrelargoge' => 'required',
			'nombrecortoge' => 'required',
			'correoge'      => 'required',
			'direccionge'   => 'required',
			'telefonoge'    => 'required',
			'logoge'        => 'required|mimes:jpeg,png|max:2000',
		);

		$validatorGE = Validator::make($grupoEmpresa, $reglasGE);

		if ($validatorGE                ->fails()) {
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
