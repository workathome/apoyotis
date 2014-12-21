<?php
class SocioTableSeeder extends Seeder {

	public function run() {
		DB::table('socio')->delete();

		$idConsultor = TipoSocio::where('nombretipo', '=', 'representante legal')
			->first()
			->codtipo_socio;

		Socio::create(array(
				"grupo_empresa_codgrupo_empresa"  => GrupoEmpresa::all()[0]->codgrupo_empresa,
				"tipo_socio_codtipo_socio"        => $idConsultor,
				"grupo_empresa_usuario_idusuario" => GrupoEmpresa::all()[0]->usuario_idusuario,
				"nombresocio"                     => 'Erikc',
				"apellidossocio"                  => 'Peña Sahonero',
				"estadocivil"                     => 'Viudo',
				"direccion"                       => 'Av. Virgen del Carmen',
				"cargo"                           => 'Gerente General',
				"correoelectronicosocio"          => 'venito@gmail.com',
				"telefonosocio"                   => '70797024',
			));

	}

}