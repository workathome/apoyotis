<?php

class TipoSocio extends Eloquent {

	protected $table = 'tipo_socio';

	protected $primaryKey = 'codtipo_socio';

	protected $fillable = array('nombretipo');

	public $timestamps = false;

	public function socios() {
		return $this->hasMany('Socio', 'tipo_socio_codtipo_socio', 'codtipo_socio');
	}

	// -

	public static function listarSoloTipoSocio() {

		return DB::table('tipo_socio')
			->where('nombretipo', '=', 'socio')
			->lists('nombretipo', 'codtipo_socio');
	}

	public static function listarTodos() {

		return DB::table('tipo_socio')->lists('nombretipo', 'codtipo_socio');
	}

	public static function idRepresentanteLegal() {

		return TipoSocio::where("nombretipo", '=', "representante legal")
			->first()	->codtipo_socio;
	}

}