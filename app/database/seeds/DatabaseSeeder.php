<?php

class DatabaseSeeder extends Seeder {

	public function run() {
		Eloquent::unguard();

		$this->call( 'PlanPagoTableSeeder'						);
		$this->call( 'EvaluacionFinalTableSeeder'				);
		$this->call( 'UsuarioTableSeeder'						);
		$this->call( 'RolTableSeeder'							);
		$this->call( 'UsuarioRolTableSeeder'					);
		$this->call( 'ConsultorTableSeeder'						);
		$this->call( 'GrupoEmpresaTableSeeder'					);

		$this->call( 'GrupoEmpresaDocumentoTableSeeder'			);
		$this->call( 'TipoSocioTableSeeder'						);
		$this->call( 'SocioTableSeeder'							);

		$this->call( 'DocumentoConsultorTableSeeder'			);
		$this->call( 'SemestreTableSeeder'						);
		$this->call( 'GestionTableSeeder'						);
		$this->call( 'ProyectoTableSeeder'						);
		$this->call( 'ConsultorProyectoGrupoEmpresaTableSeeder'	);
		$this->call( 'ActividadTableSeeder'						);

	}

}
