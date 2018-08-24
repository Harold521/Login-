
<?php
session_start();

if(isset($_SESSION['correo_user'])){
  echo'
     <p>
     Welcome :): '. $_SESSION['correo_user'] .'
     </p>
     ';
}

?>

