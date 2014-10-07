<?php

class AdminController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth', array('except' => 'getLogin'));
		/*
	$this->beforeFilter('csrf', array('on' => 'post'));

	$this->afterFilter('log', array('only' =>
	array('fooAction', 'barAction')));
	 */
	}

	public function getIndex() {
		return "index";
	}

	public function getIndex2() {
		return "index2";
	}

	public function postProfile() {
		return "profile";
	}

	public function anyLogin() {
		return "login";
	}

}
