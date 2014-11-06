<?php

class ConsultorTableSeeder extends Seeder {
	public function run() {
		DB::table('consultor')->delete();

		Consultor::create(array(

				'usuario_idusuario'        => Usuario::where('login', '=', 'leticia')->first()->idusuario,
				'nombreconsultor'          => 'Maria Leticia',
				'apellidopaternoconsultor' => 'Blanco',
				'apellidomaternoconsultor' => 'Coca',
				'correoconsultor'          => 'leticia@memi.ums.edu.bo',
				'telefonoconsultor'        => '74314297',
				'fotoconsultor'            => '/img/foto_consultor/20141106024403_leticia.jpg',
			));

	}
}