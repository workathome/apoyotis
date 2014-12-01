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

	public function getSubirdocumento() {

		$datos = array(
			'documentos' => DocumentoActividad::all()
		);

		return View::make('grupoempresa.subir_documento', $datos);

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

		$id_tipo_socio = TipoSocio::where("nombretipo", '=', "representante legal")->first()->codtipo_socio;
		$id_socios     = Socio::where('grupo_empresa_usuario_idusuario', '=', Auth::user()->idusuario)->get();

		$band_socio = false;

		foreach ($id_socios as $key => $value) {
			if ($value->tipo_socio_codtipo_socio == $id_tipo_socio) {
				$band_socio = true;
				break;
			}
		}

		if ($band_socio == true) {

			$lista_tipo_socios = DB::table('tipo_socio')->where('nombretipo', '=', 'socio')->lists('nombretipo', 'codtipo_socio');

		} else {

			$lista_tipo_socios = DB::table('tipo_socio')->lists('nombretipo', 'codtipo_socio');

		}

		$datos = array(
			'tiposocio'     => $lista_tipo_socios,
			'socios'        => Auth::user()->grupoempresa->socios,
			'estodos_civil' => array(
				'soltero'      => 'soltero',
				'casado'       => 'casado',
				'viudo'        => 'viudo',
				'divorciado'   => 'divorciado',
			),
		);

		return View::make('grupoempresa.registrar_socio', $datos);
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

			$socios     = GrupoEmpresa::find(Auth::user()->grupoempresa->codgrupo_empresa)->socios;
			$tipo_socio = TipoSocio::find(Input::get('tipo_socio_codtipo_socio'))->nombretipo;

			foreach ($socios as $key => $value) {

				if ($value->tiposocio->nombretipo == "representante legal") {
					$existe_rep_legal = true;
				}
			}

			if ($existe_rep_legal and $tipo_socio == "representante legal") {

				return Redirect::to('grupoempresa/registrarsocio')
					->withInput()
					->with('mensaje', 'Ya existe un representante legal');
			}

			$socio = Socio::crear(Input::all());

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
