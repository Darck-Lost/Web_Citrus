<?php

$conexion = mysqli_connect("localhost","root","","soporte");

//strlen = sirve para verificar la cantidad de caracteres en la variable
//isset = sirve para verificar que fue presionado el boton
//trim = remueve el espacio en las variables
if (isset($_POST['register'])) {
  if (strlen($_post['nombre']) >= 1 &&
  strlen($_post['area']) >= 1 &&
  strlen($_post['email']) >= 1 &&
  strlen($_post['problema']) >= 1) {
    $nombre = trim($_POST['nombre']);
    $apellido_m = trim($_POST['area']);
    $apellido_p = trim($_POST['email']);
    $correo = trim($_POST['problema']);
    $fechareg = date("d/m/y")

    $consulta = "INSERT INTO datos(id, nombre, area, email, problema, feha_registro) VALUES ('','$nombre','$apellido_m','$apellido_p','$correo','$fechareg')";
    $resultado=mysqli_query($conexion,$consulta);

    if ($resultado) {
      ?>
      <h3 class="ok">Se han registrado los datos correctamente</h3>
      <?php
    } else{
      ?>
      <h3 class="bad">Ha Ocurrido un Error</h3>
      <?php
    }
} else{
  ?>
  <h3 class="bad">Por Favor Completar Los Campos</h3>
  <?php
}
}
?>
