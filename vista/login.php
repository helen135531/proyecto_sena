<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="../assets/CSS/login.css">
  </head>
  <body>

    <div class="login-box">
      <img src="img/tamales.png" class="avatar" alt="Avatar Image">
      <h1>Login Here</h1>
      <form method="post">
        <!-- USERNAME INPUT -->
        <label for="username">Correo</label>
        <input type="text" placeholder="Ingrese su Correo" name="usuario">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingrese Password" name="pass">
        <input type="submit" value="Log In" name="enviar">
        <a href="#">¿Perdiste tu contraseña?</a><br>
        <a href="register.php">¿No tienes una cuenta?</a><br>
        <?php require "../controlador/login.php";   ?>
      </form>
    </div>
  </body>
</html>