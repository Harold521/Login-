<?php

include 'conexion.php';
include '../../models/user.php';

class userdao extends conexion
{
	protected static $cnx;

	private static function getconexion()
	{
		self::$cnx = conexion::conectar();

	}

	private static function desconectar()
	{
		self::$cnx = null;
	}


//Metodo para validar login
public static function login ($user)
{

	$query = ("SELECT *
		       FROM users
		       WHERE correo_user = :correo_user");

	           self::getconexion();

	           $correo_user = $user->getCorreo_user();

	           $resultado = self::$cnx->prepare($query);
	           $resultado->bindParam(":correo_user", $correo_user);

	           $resultado->execute();

	           if($resultado->rowCount() > 0){
	           	$row = $resultado->fetch(PDO::FETCH_ASSOC);

	           
	           if(password_verify($_POST['pass_user'], $row['pass_user']) ){
	           	
                 if($row['correo_user'] == $correo_user){
                 	return true;
                 }
	           	
	           } else {
	           	echo "Password o email Incorrecto";
	           }

	          }
	      }

	  }


