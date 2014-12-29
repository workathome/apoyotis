<?php

class HitoPagableTableSeeder extends Seeder {
	public function run() {
		DB::table('hito_pagable')->delete();
	}
}
