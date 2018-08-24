<?php 
include ('../templates/head.php')
?>

<h1 class="titulo"> Login</h1>

<form action="http://localhost/loginscript/views/front/validarCode.php" class="formularios" method="post">

<h2 class="subtitulo"> Ingresar</h2>
<div class="contenedor-inputs">
  
  <input type="email" name="correo_user" placeholder="Correo electronico" class="input-100 input-for" required>
  
  <input type="password" name="pass_user" placeholder="Contraseña" class="input-100 input-for" required>
<p class="p_recordar">
				<input type="checkbox" name="recordar" class="recordar">Recordar contraseña</input>
			</p>

  <input type="submit" value="Ingresar" class="btn-login">

</div>

</form>


<?php 
include ('../templates/foot.php')
?>


