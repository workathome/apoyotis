<?php

class InicioController extends BaseController {

	public function inicio() {

		$datos = array(
			'consultores' => Consultor::all(),
			'documentos'  => DocumentoConsultor::with('consultor')->get()
		);

		return View::make('inicio', $datos);
	}

}
