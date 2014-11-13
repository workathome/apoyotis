<?php

use Ballen\Executioner\Executioner;

class Latex {
	/*
	public function __construct() {
	$runner = new Executioner();
	}
	 */

	public static function test() {

		$runner  = new Executioner();
		$archivo = "app/others/Latex/cartaCedib.tex";
		$array   = explode("\n", file_get_contents($archivo));
		return file($archivo);

		$runner->setApplication('pdflatex')
		       ->addArgument('-output-directory public/latex app/others/Latex/cartaCedib.tex')
		       ->execute();

		$results = $runner->resultAsArray();

		$match = null;
		preg_match('/\w+\/(latex\/[\w\d\-]+\.pdf)/', $results[28], $match);

		return ($match)?$match[1]:$match;
		//Output written on public/latex/cartaCedib.pdf (1 page, 47013 bytes).
		//  \w+\/latex\/[\w\d\-]+\.pdf

	}

	public static function generar($input) {
		$file = "app/others/Latex/plantilla.tex";
		file_put_contents($file, $input);

		$runner = new Executioner();
		$runner->setApplication('pdflatex')
		       ->addArgument("-output-directory public/latex/ ".$file)
		       ->execute();

		$results = $runner->resultAsArray();

		return ($results)?"/latex/plantilla.pdf":$results;

	}
}
