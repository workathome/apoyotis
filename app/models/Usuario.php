<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class Usuario extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'usuario';

	protected $primaryKey = 'idusuario';

	//protected $hidden   = array('password', 'remember_token');
	protected $fillable = array('login', 'passwd', 'habilitada');

	public $timestamps = false;

	public static function crear($input) {
		$respuesta = array();

		// Declaramos reglas para validar que el nombre y apellido sean obligatorios y de longitud maxima 100
		$reglas = array(
			'login'  => 'required',
			'passwd' => 'required',
		);

		$validator = Validator::make($input, $reglas);

		// verificamos que los datos cumplan la validación
		if ($validator->fails()) {
			// si no cumple las reglas se van a devolver los errores al controlador
			$respuesta['mensaje'] = $validator;
			$respuesta['error']   = true;
			$respuesta['data']    = "";
		} else {
			// en caso de cumplir las reglas se crea el objeto Usuario

			//if (!Usuario::find($login['login'])) {

			if (!Usuario::where('login', '=', $input['login'])->count()) {
				$usuario             = new Usuario;
				$usuario->login      = $input['login'];
				$usuario->passwd     = $input['passwd'];
				$usuario->habilitada = true;
				$usuario->save();

				$respuesta['mensaje'] = 'Usuario creado!';
				$respuesta['error']   = false;
				$respuesta['data']    = $usuario;
			} else {
				$respuesta['mensaje'] = 'El usuario ya existe!';
				$respuesta['error']   = true;
				$respuesta['data']    = "";
			}
			//$usuario = static::create($input);
		}
		return $respuesta;
	}

	public function getAuthIdentifier() {
		return $this->getKey();
	}
	public function getAuthPassword() {
		return $this->passwd;
	}

	public function getReminderEmail() {
		return $this->login;
	}

}
