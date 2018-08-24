<?php

include '../../controllers/usercontroller.php';

if(isset($_POST['correo_user']) && isset($_POST['pass_user'])){

	$correo_user = $_POST['correo_user'];
	$pass_user = $_POST['pass_user'];

	if( usercontroller::login($correo_user, $pass_user)){
		session_start();
		$_SESSION['correo_user'] = $_POST['correo_user'];

		header('Location: http://localhost/loginscript/views/admin/index.php');
	}
}

