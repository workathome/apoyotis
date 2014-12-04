<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class Usuario extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'usuario';

	protected $primaryKey = 'idusuario';

	protected $fillable = array('login', 'password', 'habilitada');

	public $timestamps = false;

	protected $hidden = array('remember_token');

	public function roles() {
		/*
		 * relacion de muchos a muchos
		 * 1 = modelo a relacionar
		 * 2 = tabla intermedia
		 * 3 y 4 = colunmas en la tabla intermedia
		 */
		return $this->belongsToMany('Rol', 'user_rol', 'usuario_idusuario', 'rol_codrol');
	}

	public function grupoEmpresa() {
		return $this->hasOne('GrupoEmpresa', 'usuario_idusuario');
	}

	public static function existe($nombre) {
		return Usuario::where('login', '=', $nombre)->count();
	}

	public function consultor() {
		return $this->hasOne('Consultor', 'usuario_idusuario');
	}

	public static function crear($input) {
		$respuesta = array();

		// Declaramos reglas para validar que el nombre y apellido sean obligatorios
		$reglas = array(
			'login'    => 'required',
			'password' => 'required',
		);

		$validator = Validator::make($input, $reglas);

		// verificamos que los datos cumplan la validación
		if ($validator->fails()) {
			// si no cumple las reglas se van a devolver los errores al  controlador
			$respuesta['mensaje'] = $validator;
			$respuesta['error']   = true;
			$respuesta['data']    = "";
		} else {
			// en caso de cumplir las reglas se crea el objeto Usuario

			//if (!Usuario::find($login['login'])) {

			if (!Usuario::where('login', '=', $input['login'])->count()) {
				$usuario             = new Usuario;
				$usuario->login      = $input['login'];
				$usuario->password   = Hash::make($input['password']);
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
		return $this->password;
	}

	public function getReminderEmail() {
		return $this->email;
	}

	public function setPassword($password) {
		$this->password = Hash::make($password);
	}

	public function getRememberToken() {
		return $this->remember_token;
	}

	public function setRememberToken($value) {
		$this->remember_token = $value;
	}

	public function getRememberTokenName() {
		return 'remember_token';
	}
}
