<?php

use Ballen\Executioner\Executioner;

class Latex {
	/*
	public function __construct() { }
	 */

	public static function test() {
		$runner = new Executioner();

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
}
