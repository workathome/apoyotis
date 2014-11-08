<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| El following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	 */

	// variable ---> :attribute

	"accepted"   => "Este campo debe ser aceptada.",
	"active_url" => "El is not a valid URL.",
	"after"      => "El must be a date after :date.",
	"alpha"      => "Este Campo sólo puede contener letras.",
	"alpha_dash" => "El may only contain letters, numbers, and dashes.",
	"alpha_num"  => "El may only contain letters and numbers.",
	"array"      => "El must be an array.",
	"before"     => "El must be a date before :date.",
	"between"    => array(
		"numeric"   => "El must be between :min and :max.",
		"file"      => "El must be between :min and :max kilobytes.",
		"string"    => "El must be between :min and :max characters.",
		"array"     => "El must have between :min and :max items.",
	),
	"confirmed"      => "El confirmation does not match.",
	"date"           => "El is not a valid date.",
	"date_format"    => "El does not match the format :format.",
	"different"      => "El and :other must be different.",
	"digits"         => "El must be :digits digits.",
	"digits_between" => "El must be between :min and :max digits.",
	"email"          => "Este Campo debe ser una dirección de correo electrónico válida.",
	"exists"         => "El selected is invalid.",
	"image"          => "El must be an image.",
	"in"             => "El selected is invalid.",
	"integer"        => "El must be an integer.",
	"ip"             => "El must be a valid IP address.",
	"max"            => array(
		"numeric"       => "Este campo no puede ser mayor que :max.",
		"file"          => "El may not be greater than :max kilobytes.",
		"string"        => "El may not be greater than :max characters.",
		"array"         => "El may not have more than :max items.",
	),
	"mimes"    => "El campo debe ser un archivo de tipo: :values.",
	"min"      => array(
		"numeric" => "El must be at least :min.",
		"file"    => "El must be at least :min kilobytes.",
		"string"  => "El must be at least :min characters.",
		"array"   => "El must have at least :min items.",
	),
	"not_in"               => "El selected is invalid.",
	"numeric"              => "El must be a number.",
	"regex"                => "El format is invalid.",
	"required"             => "Este campo es requerido.",
	"required_if"          => "El field is required when :other is :value.",
	"required_with"        => "El field is required when :values is present.",
	"required_with_all"    => "El field is required when :values is present.",
	"required_without"     => "El field is required when :values is not present.",
	"required_without_all" => "El field is required when none of :values are present.",
	"same"                 => "El and :other must match.",
	"size"                 => array(
		"numeric"             => "El must be :size.",
		"file"                => "El must be :size kilobytes.",
		"string"              => "El must be :size characters.",
		"array"               => "El must contain :size items.",
	),
	"unique" => "El :attribute has already been taken.",
	"url"    => "El :attribute format is invalid.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	 */

	'custom'          => array(
		'attribute-name' => array(
			'rule-name'     => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| El following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	 */

	'attributes' => array(),

);
