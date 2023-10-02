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
        <label for="username">nombres</label>
        <input type="text" placeholder="Ingrese un nombre" name="nombre">
        <!-- PASSWORD INPUT -->
        <label for="password">apellidos</label>
        <input type="password" placeholder="Ingrese sus apellidos" name="apellidos">

        <label for="password">numero de documento</label>
        <input type="password" placeholder="Ingrese sus apellidos" name="noDocumento">

       <label for="username">correo</label>
        <input type="text" placeholder="Ingrese correo" name="correo">
        
        <label for="username">contraseña</label>
        <input type="text" placeholder="Ingrese contraseña" name="pass">

        <label for="username">telefono</label>
        <input type="text" placeholder="Ingrese telefono" name="telefono">

        <label for="username">direccion</label>
        <input type="text" placeholder="Ingrese direccion" name="direccion">

       

        <input type="submit" value="Log In" name="enviar">
        <a href="#">¿Perdiste tu contraseña?</a><br>
        <a href="#">¿No tienes una cuenta?</a><br>
        <?php require "../controlador/login.php";   ?>
      </form>
    </div>
  </body>
</html>