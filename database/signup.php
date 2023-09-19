<?php

  require 'db.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (usuario, contraseña) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/../APW/database/assets/style.css">
  </head>
  <body>
  <header>
        <div class="logo_invernadero">
            <a href="/../APW/index.php"><img src="/../APW/imagenes/Jazmin.png" alt=""></a>
        </div>
        <a href="">Invernaderos Tehuacán</a>
        <div class="logo_Citrus">      
            <img src="/../APW/imagenes/Citrus2_Verde_PNG.png" alt="">
        </div>
    </header>

    <h1>Registro</h1>
    <span>O <a href="/../APW/login.html">Iniciar Sesión</a></span>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Ingrese su usuario">
      <input name="usuario" type="text" placeholder="Ingrese su email">
      <input name="password" type="password" placeholder="Ingrese su contraseña">
      <input name="confirm_password" type="password" placeholder="Confirme su contraseña">
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
