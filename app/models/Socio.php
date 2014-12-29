<?php

class Socio extends Eloquent {

	protected $table = 'socio';

	protected $primaryKey = 'idsocio';

	protected $fillable = array(
		"grupo_empresa_codgrupo_empresa",
		"tipo_socio_codtipo_socio",
		"grupo_empresa_usuario_idusuario",
		"nombresocio",
		"apellidossocio",
		"estadocivil",
		"direccion",
		"cargo",
		"correoelectronicosocio",
		"telefonosocio",

	);

	public $timestamps = false;

	public function tipoSocio() {
		return $this->belongsTo('TipoSocio', 'tipo_socio_codtipo_socio');
	}

	public static function crear($input) {
		$respuesta = array();

		$consulta = 'select * from socio where nombresocio = ? and apellidossocio=?';

		$socio = DB::select( $consulta, array($input['nombresocio'], $input['apellidossocio'] ) );

		if ( count( $socio ) == 0 ) {

			$socio = new Socio;

			$socio->grupo_empresa_codgrupo_empresa  = Auth::user()->grupoEmpresa->codgrupo_empresa;
			$socio->tipo_socio_codtipo_socio        = $input['tipo_socio_codtipo_socio'];
			$socio->grupo_empresa_usuario_idusuario = Auth::user()->idusuario;
			$socio->nombresocio                     = $input['nombresocio'];
			$socio->apellidossocio                  = $input['apellidossocio'];
			$socio->estadocivil                     = $input['estadocivil'];
			$socio->direccion                       = $input['direccion'];
			$socio->cargo                           = $input['cargo'];
			$socio->correoelectronicosocio          = $input['correoelectronicosocio'];
			$socio->telefonosocio                   = $input['telefonosocio'];
			$socio->save();

			$respuesta['mensaje'] = 'Socio creado!';
			$respuesta['error']   = false;
			$respuesta['data']    = $socio;
		} else {
			$respuesta['mensaje'] = 'El Socio ya existe!';
			$respuesta['error']   = true;
			$respuesta['data']    = "";
		}
		return $respuesta;
	}

	public static function listaSocios() {

		return Socio::where('grupo_empresa_usuario_idusuario', '=', Auth::user()->idusuario)->get();
	}
}
