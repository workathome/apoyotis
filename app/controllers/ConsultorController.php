<?php

class ConsultorController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth');
		$this->beforeFilter('consultor');

		$empresas = ConsultorProyectoGrupoEmpresa::ConsultorEmpresas();
		View::share('consultor_empresas', $empresas);
	}

	/**
	 * Genera la vista principal del consultor
	 *
	 * @return Vista consultor.principal
	 */
	public function getIndex() {
		$datos = array(
			'proyecto'            => Proyecto::vigente(),
			'documentos_empresas' => GrupoEmpresaDocumento::with('grupoEmpresa')->get()
		);

		return View::make('consultor.principal', $datos);
	}

	/**
	 * Genera la vista principal del consultor
	 *
	 * @return Vista consultor.principal
	 */
	public function getGrupoempresas() {
		$datos = array(
			'empresas' => GrupoEmpresa::with('socios')->get()
		);
		return View::make('consultor.grupo_empresas', $datos);

	}

	/**
	 * Genera la vista principal del consultor
	 *
	 * @return Vista consultor.principal
	 */
	public function getCrearproyecto() {
		if (Proyecto::vigente()) {
			return Redirect::to("/consultor");
		}
		$datos = array(
			'proyecto' => Proyecto::vigente()
		);
		return View::make('consultor.crear_proyecto', $datos);

	}

	/**
	 * Genera vista para gestionar proyectos
	 *
	 * @return Vista consultor.proyecto
	 */
	public function getProyecto() {
		if (!Proyecto::vigente()) {
			return Redirect::to("/consultor");
		}

		$datos = array(
			'proyecto' => Proyecto::vigente()
		);

		return View::make('consultor.proyecto', $datos);

	}

	/**
	 * funcion para crear proyectos
	 *
	 * @return  Url::consultor
	 */
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

	public function getGenerarcontrato() {
		$datos = array(
			"grupo_empresa" => "",
		);
		return View::make('consultor.generar_contrato', $datos);
	}

	public function postGenerarcontrato() {
		$datos = array(
			"esqueleto" => Input::get('latex'),
			"pdf"       => Latex::generar(Input::get("latex"))
		);
		return "postGenerarcontrato";
	}

}
