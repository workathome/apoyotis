			<?php

class ConsultorController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth', array(
				'except' => array(
					'getGenerarcontrato',
					'postGenerarcontrato',
				)
			));

		$this->beforeFilter('consultor');

		if (Auth::check()) {
			$empresas = ConsultorProyectoGrupoEmpresa::ConsultorEmpresas();
			View::share('consultor_empresas', $empresas);
		}

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
	 * Genera la vista de la grupo empresa requerida
	 * @param $id_grupo_empresa
	 * @return Vista consultor.principal
	 */
	public function getGrupoempresa($id_grupo_empresa) {

		$proyectoAsociado = ConsultorProyectoGrupoEmpresa::proyectoAasociado($id_grupo_empresa);
		$datos            = array(
			'empresa'        => GrupoEmpresa::find($id_grupo_empresa),
			'hitos_pagables' => $proyectoAsociado->planPago
		);
		return View::make('consultor.grupo_empresa', $datos);
	}

	/**
	 * gestiona funciones  de la grupo empresa requerida
	 * @param $id_grupo_empresa
	 * @return Vista consultor.principal
	 */
	public function postGrupoempresa() {
		if (Request::ajax()) {
			switch (Input::get('tarea')) {
				case 1:
					return "generar contrato";
					break;
				case 2:
					return "hito pagable";
					break;
			}
		}

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
			'proyecto'           => Proyecto::vigente(),
			'consultor_empresas' => ConsultorProyectoGrupoEmpresa::ConsultorEmpresas(),
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
			'proyecto'           => Proyecto::vigente(),
			'consultor_empresas' => ConsultorProyectoGrupoEmpresa::ConsultorEmpresas(),
		);

		return View::make('consultor.proyecto', $datos);

	}

	/**
	 * funcion para crear proyectos
	 *
	 * @return  Url::consultor
	 */
	public function postCrearproyecto() {
		$fechaFinal  = strtotime(Input::get('fechafinproyecto'));
		$fechaActual = strtotime(date("Y-m-d H:i:s"));

		if ($fechaFinal < $fechaActual) {
			return Redirect::to('consultor/crearproyecto')
				->withInput(Input::except('archivodocumento'))
				->with('mensaje', "Elija una fecha posterior a la fecha actual");
		}

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

			$proyecto = Proyecto::crear(array(
					"nombreproyecto"     => Input::get('nombreproyecto'),
					"fechafinproyecto"   => Input::get('fechafinproyecto'),
					"gestion_id_gestion" => Gestion::all()[0]->id_gestion,
					"id_consultor_log"   => Auth::user()->consultor->idconsultor
				));
			if ($proyecto["error"] == true) {
				return Redirect::to('consultor/crearproyecto')
					->with('mensaje', $proyecto['mensaje']);
			}

		}
		return Redirect::to('/consultor');

	}

	public function getProyectodardebaja() {
		Proyecto::darDebaja();
		return Redirect::to('/consultor');
	}

	public function postGenerarcontrato($id_grupo_empresa) {

		$proyectoAsociado = ConsultorProyectoGrupoEmpresa::proyectoAasociado($id_grupo_empresa);
		$grupoEmpresa     = $proyectoAsociado->grupoEmpresa;
		$consultor        = $proyectoAsociado->consultor;
		$proyecto         = $proyectoAsociado->proyecto;

		$representanteLegal = GrupoEmpresa::representanteLegal($grupoEmpresa->codgrupo_empresa);

		$plantilla       = Latex::obtenerPlantilla();
		$nombreConsultor = $consultor->nombreconsultor;
		$nombreConsultor .= " ".$consultor->apellidopaternoconsultor;
		$nombreConsultor .= " ".$consultor->apellidomaternoconsultor;

		$plantilla  = str_replace("[[consultor]]", $nombreConsultor, $plantilla);
		$plantilla  = str_replace("[[cargo]]", "Consultor T.I.S.", $plantilla);
		$referencia = "Contrato de trabajo";
		$plantilla  = str_replace("[[referencia]]", $referencia, $plantilla);

		if (Input::get('cuerpo') != "") {
			$plantilla = str_replace("[[cuerpo]]", Input::get('cuerpo'), $plantilla);
		}

		if ($representanteLegal) {
			$plantilla = str_replace("[[representante_legal]]", $representanteLegal, $plantilla);
		} else {
			return Redirect::to("consultor/grupoempresa/".$id_grupo_empresa);
			//"La empresa no tiene representante legal";
		}

		$plantilla = str_replace("[[grupo_empresa]]", $grupoEmpresa->nombrelargoge, $plantilla);

		$contrato = Latex::generarContrato($plantilla);

		return Redirect::to("/latex/contrato.pdf");
	}

}
