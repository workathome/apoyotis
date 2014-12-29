<?php

class ConsultorTableSeeder extends Seeder {
	public function run() {
		DB::table('consultor')->delete();

		Consultor::create(array(

				'usuario_idusuario'        => Usuario::where( 'login' , '=' , 'leticia' )->first()->idusuario,
				'nombreconsultor'          => 'Maria Leticia',
				'apellidopaternoconsultor' => 'Blanco',
				'apellidomaternoconsultor' => 'Coca',
				'correoconsultor'          => 'leticia@memi.ums.edu.bo',
				'telefonoconsultor'        => '4252439',
				'fotoconsultor'            => '/img/foto_consultor/20141106024403_leticia.jpg',
			));

		Consultor::create(array(

				'usuario_idusuario'        => Usuario::where( 'login' , '=' , 'corina' )->first()->idusuario,
				'nombreconsultor'          => 'Corina Justina',
				'apellidopaternoconsultor' => 'Flores',
				'apellidomaternoconsultor' => 'Villarroel',
				'correoconsultor'          => 'corina@memi.ums.edu.bo',
				'telefonoconsultor'        => '4252439 ',
				'fotoconsultor'            => '/img/foto_consultor/20141112194613_corina.jpg',
			));

		Consultor::create(array(

				'usuario_idusuario'        => Usuario::where( 'login' , '=' , 'marco' )->first()->idusuario,
				'nombreconsultor'          => 'Marco Antonio',
				'apellidopaternoconsultor' => 'Montecinos',
				'apellidomaternoconsultor' => 'Choque',
				'correoconsultor'          => 'markmcbo@gmail.com',
				'fotoconsultor'            => '/img/foto_consultor/20141212194613_marco_montecinos.jpg',
			));
	}
}