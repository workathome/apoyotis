<?php

class GrupoempresaController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth');
	}

	public function getIndex() {
		return View::make('grupoempresa.index');
	}

}
