<?php

class UserRol extends Eloquent {

	protected $table = 'user_rol';

	protected $primaryKey = 'coduser_rol';

	protected $fillable = array('usuario_idusuario', 'rol_codrol');

	public $timestamps = false;

}
