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

		$usuario = Usuario::crear($usuario);

		if ($usuario['error'] == false) {
			$grupoEmpresa['usuario_idusuario'] = $usuario['data']->idusuario;
			if (Input::hasFile('logoge')) {
				$grupoEmpresa['archivoLogo'] = Input::file('logoge');
			}
			$grupoEmpresa = GrupoEmpresa::crear($grupoEmpresa);
		} else {
			return Redirect::to('registro');
		}

	}

}
