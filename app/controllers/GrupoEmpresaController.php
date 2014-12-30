<?php

class GrupoEmpresaController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth');
		$this->beforeFilter('grupo-empresa');
	}

	public function getIndex() {

		$datos = array(
			//'documentos' => Auth::user()->grupoempresa->documentos
			'documentos' => null
		);

		return View::make('grupo_empresa.principal', $datos);
	}

	public function getActividades() {
		return View::make('grupo_empresa.actividades');
	}

	public function getPlanpagos() {

		$datos = array(
			'rango_dias' => PlanPago::rangoDias(),
			'fijado'     => PlanPago::esFijado()
		);

		return View::make('grupo_empresa.planpagos', $datos);
	}

	public function postPlanpagos() {


		if ( Request::isJson() ) {
			
			$codplan_pago = ConsultorProyectoGrupoEmpresa::proyectoActual()->planPago->codplan_pago;

			$reglasHito = array(
				'nombre'      => 'alpha_spaces_t',
				'entregables' => 'alpha_spaces_t',
				'porcentaje'  => 'numeric',
				'fecha'       => 'date'
			);
			
			
			foreach ( Input::all() as $key => $hito ) {

				$_hito = array(
					'nombre'      => ( $hito['nombre'] != '' ) ? $hito['nombre'] : '' ,
					'entregables' => ( $hito['entregables'] != '' ) ? $hito['entregables'] : '' ,
					'porcentaje'  => ( $hito['porcentaje'] != '' ) ? $hito['porcentaje'] : 0 ,
					'fecha'       => ( $hito['fecha'] != '' ) ? $hito['fecha'] : date( "Y-m-d H:i:s"),
				);

				$validadorHito = Validator::make( $_hito , $reglasHito );
				
				if( !$validadorHito->fails() ) {

					file_put_contents('php://stdout', PHP_EOL.$_hito['fecha'].PHP_EOL );
					$entregables = explode( "," , $hito['entregables'] );

					$oHito = HitoPagable::create(array(
							'nombre'          => $_hito['nombre'] ,
							'porcentaje_hito' => $_hito['porcentaje'],
							'fecha'           => $_hito['fecha'],
							'codplan_pago'    => $codplan_pago
						));
				
					foreach ( $entregables as $key => $entregable ) {
						
						Entregable::create(array(
								"nombre"          => trim( $entregable ) ,
								"codhito_pagable" => $oHito["codhito_pagable"]
							));
					}
				}
				unset( $validadorHito );
			}

		}
		elseif ( !PlanPago::existe() ) {

			$reglasPlanPago = array(
				'monto'        => 'required|numeric',
				'satisfaccion' => 'required|numeric',
				'dia'          => 'required|numeric',
			);

			$validadorPlanPago = Validator::make( Input::all() , $reglasPlanPago );

			if( $validadorPlanPago->fails() ) {
				return Redirect::to( URL::current() )
				->withErrors($validadorPlanPago)
				->withInput()
				->with('mensaje', 'Revise los campos del formulario');
			}

			PlanPago::crear( Input::all() );

		}

		return Redirect::to( URL::current() );
	}

	public function getSubirdocumento() {

		$datos = array(
			'documentos' => DocumentoActividad::all()
		);

		return View::make('grupo_empresa.subir_documento', $datos);

	}

	public function postSubirdocumento() {

		$usuario_grupoEmpresa = false;

		foreach (Auth::user()->roles as $rol) {
			if ($rol->tiporol == 'grupo-empresa') {
				$usuario_grupoEmpresa = true;
			}
		}

		if ($usuario_grupoEmpresa == false) {

			return Redirect::to('grupoempresa/subirdocumento')
				->withInput(Input::except('archivodocumento'))
				->with('mensaje', 'solo se permite a usuario grupoempresa');
		}

		if (Input::hasFile('archivodocumento')) {

			if (Input::file('archivodocumento')->getMimeType() != "application/pdf") {

				return Redirect::to('grupoempresa/subirdocumento')
				->withInput(Input::except('archivodocumento'))
				->with('mensaje', 'el archivo tiene que ser pdf');
			}
		} else {

			return Redirect::to('grupoempresa/subirdocumento')
				->withInput(Input::except('archivodocumento'))
				->with('mensaje', 'debe subir un archivo pdf');
		}

		$documento = Input::only(
			'titulo_gedocumento',
			'descripciongedocumento',
			'archivodocumento'
		);

		$reglasDocumento = array(
			'archivodocumento' => 'required|mimes:pdf',
		);

		$validatorDocumento = Validator::make($documento, $reglasDocumento);

		if ($validatorDocumento->fails()) {

			return Redirect::to('grupoempresa/subirdocumento')
			->withErrors($validatorDocumento)
			->withInput(Input::except('archivodocumento'))
			->with('mensaje', 'debe llenar todos los campos');

		} else {

			$documento['archivo'] = Input::file('archivodocumento');
			$documento            = DocumentoActividad::crear($documento);

			if ($documento['error'] == false) {
				return Redirect::to('grupoempresa/subirdocumento')
					->with('mensaje', $documento['mensaje']);
			} else {

				return Redirect::to('grupoempresa/subirdocumento')
					->with('mensaje', $documento['mensaje']);

			}

		}
	}

	public function getRegistrarsocio() {

		$id_tipo_socio = TipoSocio::idRepresentanteLegal();
		$lista_socios  = Socio::listaSocios();

		$band_socio = false;

		foreach ($lista_socios as $socio) {
			if ($socio->tipo_socio_codtipo_socio == $id_tipo_socio) {
				$band_socio = true;
				break;
			}
		}

		if ($band_socio == true) {
			// Listar solo tipo socio
			$lista_tipo_socios = TipoSocio::listarSoloTipoSocio();

		} else {

			$lista_tipo_socios = TipoSocio::listarTodos();

		}

		$datos = array(
			'tiposocio'     => $lista_tipo_socios,
			'socios'        => Auth::user()->grupoEmpresa->socios,
			'estodos_civil' => array(
				'soltero'      => 'soltero',
				'casado'       => 'casado',
				'viudo'        => 'viudo',
				'divorciado'   => 'divorciado',
			),
		);

		return View::make('grupo_empresa.registrar_socio', $datos);
	}

	public function postRegistrarsocio() {

		$reglasSocio = array(
			'nombresocio'              => 'required|alpha_spaces',
			'apellidossocio'           => 'required|alpha_spaces',
			'estadocivil'              => 'required|alpha',
			'direccion'                => 'required|alpha_spaces_t',
			'cargo'                    => 'required|alpha_spaces',
			'correoelectronicosocio'   => 'required|email',
			'telefonosocio'            => 'required|numeric|digits_between:7,8',
			'tipo_socio_codtipo_socio' => 'required|numeric',
		);

		$validatorSocio = Validator::make(Input::all(), $reglasSocio);

		if ($validatorSocio->fails()) {
			return Redirect::to('grupoempresa/registrarsocio')
			->withErrors($validatorSocio)
			->withInput()
			->with('mensaje', 'Revise los campos del formulario');
		} else {

			$existe_rep_legal = false;

			$socios     = GrupoEmpresa::find(Auth::user()->grupoEmpresa->codgrupo_empresa)->socios;
			$tipo_socio = TipoSocio::find(Input::get('tipo_socio_codtipo_socio'))->nombretipo;

			foreach( $socios as $key => $socio ) {

				if( $socio->tipoSocio->nombretipo == "representante legal") {
					$existe_rep_legal = true;
				}
			}

			if ( $existe_rep_legal and $tipo_socio == "representante legal") {

				return Redirect::to('grupoempresa/registrarsocio')
					->withInput()
					->with('mensaje', 'Ya existe un representante legal');
			}

			$socio = Socio::crear( Input::all() );

			if ($socio['error'] == false) {

				return Redirect::to('grupoempresa/registrarsocio')
					->with('mensaje', $socio['mensaje']);
			} else {

				return Redirect::to('grupoempresa/registrarsocio')
					->with('mensaje', $socio['mensaje']);

			}

		}

	}

}
