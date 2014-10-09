<?php

class RegistroController extends BaseController {

	public function getIndex() {
		return View::make('registro.registrogrupoempresa');
	}

	public function postIndex() {

		if (Input::file('logoge')) {
			$archivo = Input::file('logoge');
			return "llego el archivo ".$archivo->getMimeType();

		}
		return "no llego el archivo";

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

			$destinationPath = public_path().'/img/logo_grupo_empresas';

			$destinationPath = '';
			$filename        = '';

			if (Input::hasFile('image')) {
				$file            = Input::file('image');
				$destinationPath = '/img/';
				$filename        = str_random(6).'_'.$file->getClientOriginalName();
				$uploadSuccess   = $file->move($destinationPath, $filename);
			}

			$pizza = Pizza::create(['name' => Input::get('name'),
					'price'                      => Input::get('price'),
					'ingredients'                => Input::get('ingredients'),
					'active'                     => Input::get('active'),
					'path'                       => $destinationPath.$filename]);

			if ($pizza) {
				return Redirect::route('pizzas.show', $pizza->id);
			}

			$grupoEmpresa = GrupoEmpresa::crear($grupoEmpresa);
		} else {
			return Redirect::to('registro');
		}

	}

}
