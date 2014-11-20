<?php

class ConsultorController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth');
		$this->beforeFilter('consultor');
		/*
	$this->beforeFilter('csrf', array('on' => 'post'));

	$this->afterFilter('log', array('only' =>
	array('fooAction', 'barAction')));
	 */
	}

	public function getIndex() {
		$datos = array(
			'proyecto'            => Proyecto::vigente(),
			'documentos_empresas' => GrupoEmpresaDocumento::with('grupoempresa')->get(),
			'consultor_empresas'  => ConsultorProyectoGrupoEmpresa::ConsultorEmpresas()
		);

		return View::make('consultor.index', $datos);
	}

	public function getGrupoempresas() {
		$datos = array(
			'consultor_empresas' => ConsultorProyectoGrupoEmpresa::ConsultorEmpresas()
		);
		return View::make('consultor.grupoempresas', $datos);

	}

	public function getCrearproyecto() {
		if (Proyecto::vigente()) {
			return Redirect::to("/consultor");
		}
		return View::make('consultor.crearproyecto');

	}

	public function getProyecto() {
		if (!Proyecto::vigente()) {
			return Redirect::to("/consultor");
		}

		$datos = array(
			'proyecto'           => Proyecto::vigente(),
			'consultor_empresas' => ConsultorProyectoGrupoEmpresa::ConsultorEmpresas()
		);

		return View::make('consultor.proyecto', $datos);

	}

	public function postCrearproyecto() {

		$reglasProyecto = array(
			'nombreproyecto'   => 'required|alpha_spaces_t',
			'fechafinproyecto' => 'required|date_format:Y-m-d H:i:s',
		);

		$validadorProyecto = Validator::make(Input::all(), $reglasProyecto);

		if ($validadorProyecto->fails()) {
			$mensaje = array('alert-danger', 'Revise los campos del formulario');
			return Redirect::to('consultor/crearproyecto')
				->withErrors($validadorProyecto)
				->withInput(Input::except('archivodocumento'))
				->with('mensaje', $mensaje);
		} else {

			$proyecto = Proyecto::create(array(
					"nombreproyecto"     => Input::get('nombreproyecto'),
					"fechafinproyecto"   => Input::get('fechafinproyecto'),
					"gestion_id_gestion" => Gestion::all()[0]->id_gestion,
					"id_consultor_log"   => Auth::user()->consultor->idconsultor
				));

		}
		return Redirect::to('/consultor');

	}

	public function getProyectodardebaja() {
		Proyecto::darDebaja();
		return Redirect::to('/consultor');
	}

}
