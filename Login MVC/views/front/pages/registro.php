<?php 
include ('../templates/head.php')
?>

<h1 class="titulo1"> Formulario de registro</h1>
<form action="" class="formularios">

<h2 class="titulo2"> Crear Nueva Cuenta</h2>
<div class="contenedor-inputs">
  <fieldset class="datos">
    <br>
     <legend>Datos personales:</legend>
  <input type="text" name="nombre" placeholder="Nombre completo" class="input-50 input-for" required>
  
  <select name="genero" class="input-50 select-for" required>
  <option value="genero" selected>Genero</option>
  <option value="">Mujer</option>
  <option value="">Hombre</option>
  </select>

  <select name="tipo de documento" class="input-50 select-for" required>
  <option value="tipo" selected>Tipo de documento</option>
  <option value="">CC</option>
  <option value="">TI</option>
  </select>

  <input type="text" name="documento" placeholder="Numero de documento" class="input-50 input-for" required>

  <input type="text" name="direccion" placeholder="Dia/mes/año" class="input-100 input-for" required>
 </fieldset>


 <fieldset class="academico">
  <br>
  <legend>Datos academicos:</legend>
  <select name="type_user" id="type_user" class="input-100 input-for">
    <option value="aprendiz"> Aprendiz </option>
    <option value="instructor"> Instructor </option>
    <option value="seleccionar" selected> Tipo Usuario..</option>

  </select>

  <select name="area_for" id="area_for" style="display:none;" class="input-100 input-for">
    <option value="area1"> Area de formacion </option>
    <option value="area2"> Area de formacion </option>
    <option value="area3"> Area de formacion </option>
    <option value="seleccionar" selected> Seleccionar Area de Formacion..</option>
  </select>

    <select name="area_con" id="area_con" style="display:none;" class="input-100 input-for">
    <option value="con1"> Area de Conocimiento </option>
    <option value="con2"> Area de Conocimiento </option>
    <option value="con3"> Area de Conocimiento </option>
    <option value="seleccionar" selected> Seleccionar Area de Conocimiento..</option>
  </select>
</fieldset>

<fieldset class="ubicacion">
  <br>
  <legend>Ubicacion Usuario:</legend>
  
  <select name="pais" class="input-50 select-for" required>
  <option value="pais" selected>Pais</option>
  <option value="">Colombia</option>
  <option value="">....</option>
  </select>

  <select name="departamento" class="input-50 select-for" required>
  <option value="departamento" selected>Departamento</option>
  <option value="">Putumayo</option>
  <option value="">....</option>
  </select>

  <select name="ciudad" class="input-100 input-for" required>
  <option value="ciudad" selected>Ciudad</option>
  <option value="">Mocoa</option>
  <option value="">....</option>
  </select>
  
    <select name="tipo_ubicacion" id="tipo_ubicacion" class="input-100 input-for">
    <option value="urbano"> Urbano </option>
    <option value="rural"> Rural </option>
    <option value="seleccionar" selected> Ubicacion..</option>
  </select>

  <select name="comuna" id="comuna" style="display:none;" class="input-100 input-for">
    <option value="comuna1"> Comuna 1 </option>
    <option value="comuna2"> Comuna 2 </option>
    <option value="comuna3"> Comuna 3 </option>
    <option value="seleccionar" selected> Seleccionar Comuna..</option>
  </select>

   <select name="rural" id="tipo_rural" style="display:none;" class="input-100 input-for">
    <option value= "corregimiento"> Corregimiento </option>
    <option value="vereda"> Vereda </option>
    <option value="seleccionar" selected> Seleccionar Ubicacion Rural..</option>
  </select>
    
    <select name="corregimientos" id="tipo_corregimientos" style="display:none;" class="input-100 input-for">
    <option value="corregimiento1"> Corregimiento 1 </option>
    <option value="corregimiento2"> Corregimiento 2 </option>
    <option value="corregimiento3"> Corregimiento 3 </option>
    <option value="seleccionar" selected> Seleccionar Corregimiento..</option>
  </select>

  <select name="veredas" id="tipo_veredas" style="display:none;" class="input-100 input-for">
    <option value="vereda1"> Vereda </option>
    <option value="vereda2"> Vereda </option>
    <option value="vereda3"> Vereda </option>
    <option value="seleccionar" selected> Seleccionar Vereda..</option>
  </select>

  <select name="barrio" id="barrio" style="display:none;" class="input-100 input-for">
    <option value="barrio1"> Barrio 1 </option>
    <option value="barrio2"> Barrio 2 </option>
    <option value="barrio3"> Barrio 3 </option>
    <option value="seleccionar" selected> Seleccionar Barrio..</option>
  </select>
</fieldset>


<fieldset class="contacto">
  <br>
  <legend>Contacto Usuario:</legend>
<input type="text" name="direccion" placeholder="Direccion" class="input-50 input-for" required>

<input type="text" name="celular" placeholder="Celular" class="input-50 input-for" required>

<input type="text" name="telefono" placeholder="Telefono" class="input-50 input-for" required>
</fieldset>

<input type="email" name="correo" placeholder="Correo electronico" class="input-100 input-for email" required>

<input type="password" name="password" placeholder="Contraseña" class="input-100 input-for" required>
<input type="password" name="password" placeholder="Confirmar Contraseña" class="input-100 input-for" required>

<input type="submit" value="Registrarse" class="btn">
<p class="link">¿Ya tienes una cuenta? <a href="#"> Ingresa aqui</a></p>

</div>

</form>


<?php 
include ('../templates/foot.php')
?>






