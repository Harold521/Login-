<?php

include '../../database/UserDao.php';

class UserController{

    public static function login($correo_users, $pass_users){
        $obj_user = new User();
        $obj_user->setcorreo_users($correo_users);
        $obj_user->setpass_users($pass_users);

        return UserDao::login($obj_user);
    }
}
?>
