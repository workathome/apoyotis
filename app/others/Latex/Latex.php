<?php

use Ballen\Executioner\Executioner;

class Latex {
	/*
	public function __construct() {
	$runner = new Executioner();
	}
	 */

	public static function test() {

		echo "<pre>";
		print_r( $_SERVER['HTTP_HOST'] );
		echo "</pre>";
		return 0;

		$runner  = new Executioner();

		$origen  = public_path()."/latex/plantillas/test.tex";
		$destino = public_path()."/latex/plantillas";
		
		$runner->setApplication('/usr/bin/pdflatex')
		       ->addArgument( "-output-directory {$destino} {$origen}" )
		       ->execute();

		$results = $runner->resultAsArray();
		return $results;

	}

	public static function obtenerPlantilla() {

		$archivo   = "/latex/plantillas/contrato.tex";
		$contenido = file_get_contents( public_path().$archivo );

		return $contenido;
	}

	public static function generarContrato( $plantilla , $empresa , $consultor ) {

		$contrato = "/latex/contrato_".str_replace( " " , "_", $empresa );

		$contrato .= "_".str_replace( " " , "_" , $consultor );

		$contrato = str_replace( "." , "" , $contrato );

		file_put_contents( public_path()."{$contrato}.tex", $plantilla );

		$origen  = public_path()."{$contrato}.tex";
		$destino = public_path()."/latex/";


		$runner = new Executioner();
		$runner->setApplication( "/usr/bin/pdflatex" )
		       ->addArgument( "-output-directory {$destino} {$origen}" )
		       ->execute();

		$results = $runner->resultAsArray();

		return ( $results ) ? "{$_SERVER['HTTP_HOST']}{$contrato}.pdf" : 0 ;

	}
}
