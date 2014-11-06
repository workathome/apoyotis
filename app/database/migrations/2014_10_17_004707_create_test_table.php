<?php

use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('test', function ($table) {
				$table->increments('id');
				$table->integer('usu_rol')->nullable();
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
	}

}
