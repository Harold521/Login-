<?php

include '../../database/userdao.php';


class usercontroller{

	public static function login($correo_user, $pass_user){

		//creamos un objeto del usuario (instanciamos)
	$obj_user = new users();
	$obj_user->setCorreo_user($correo_user);
	$obj_user->setPass_user($pass_user);

	return userdao::login($obj_user);
	}
}