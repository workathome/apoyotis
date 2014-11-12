<?php

class InicioController extends BaseController {

	public function inicio() {

		$datos = array(
			'consultores'          => Consultor::all(),
			'documentos_consultor' => DocumentoConsultor::with('consultor')->get(),
			'documentos_proyecto'  => ProyectoDocumento::publicos()
		);

		return View::make('inicio', $datos);
	}

}
