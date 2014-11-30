<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample() {

		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	public function testLogin() {

		$crawler = $this->client->request('GET', '/login');

		var_dump($this->client->getResponse());

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
