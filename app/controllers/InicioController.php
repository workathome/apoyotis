<?php

class InicioController extends BaseController {


	/**
	 * Genera la vista principal del sistema
	 *
	 * @return Vista inicio
	 */
	public function inicio() {

		$gestion = Proyecto::vigente();
		$gestion = explode( ' ', $gestion->created_at )[0];
		$gestion = explode( '-', $gestion );
		$anio    = $gestion[0];
		$gestion = intval( $gestion[1] );
		
		$semestre = ( $gestion < 6 ) ? "I" : "II";

		$gestion = array(
			'semestre' => $semestre,
			'anio'     =>  $anio
			);

		$datos = array(
			'consultores'          => Consultor::all(),
			'proyecto'             => Proyecto::vigente(),
			'gestion'              => $gestion,
			'lista_vigentes'       => ConsultorProyectoGrupoEmpresa::listaVigentes(),
			'documentos_consultor' => DocumentoConsultor::with('consultor')->get(),
			'documentos_proyecto'  => ProyectoDocumento::publicos()
		);

		return View::make( 'inicio' , $datos );
	}

}
