<?php
/*
 * app/validators.php
 */

Validator::extend('alpha_spaces', function ($attribute, $value) {
		return preg_match('/^[\pL\s]+$/u', $value);
	});

Validator::extend('alpha_spaces_t', function ($attribute, $value) {
		return preg_match('/^[\pL\sL\dL\.L\-\#\,\/]+$/u', $value);
	});
