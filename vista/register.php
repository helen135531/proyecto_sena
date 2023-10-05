<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="../assets/CSS/register.css">
  </head>
  <body>

    <div class="register-box">
      <img src="img/tamales.png" class="avatar" alt="Avatar Image">
      <h1>regitrate aqui</h1>
      <form method="post">
        <!-- USERNAME INPUT -->
        <label for="username">nombres</label>
        <input type="text" placeholder="Ingrese un nombre" name="nombre">
        <!-- PASSWORD INPUT -->
        <label for="lastname">apellidos</label>
        <input type="text" placeholder="Ingrese sus apellidos" name="apellidos">

        <select name="Tdocumento" id="">
          <option value="T.I">targeta de identidad</option>
          <option value="C.C">cedula de ciudadania</option>
          <option value="C.E">cedula extrangera</option>
        </select>
        <label for="NoDocument">numero de documento</label>
        <input type="number" placeholder="Ingrese sus apellidos" name="noDocumento">

       <label for="Email">correo</label>
        <input type="email" placeholder="Ingrese correo" name="correo">
        
        <label for="password">contraseña</label>
        <input type="password" placeholder="Ingrese contraseña" name="pass">

        <label for="username">telefono</label>
        <input type="text" placeholder="Ingrese telefono" name="telefono">

        <label for="direccion">direccion</label>
        <input type="text" placeholder="Ingrese direccion" name="direccion">

       

        <input type="submit" value="Log In" name="enviar">
        <a href="#">¿Perdiste tu contraseña?</a><br>
        <a href="login.php">¿ya tienes una cuenta?</a><br>
        <?php require "../controlador/register.php";   ?>
      </form>
    </div>
  </body>
</html>