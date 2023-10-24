

<?php 

require_once('../controlador/Ausuario.php'); // Incluye el archivo de conexión a la base
$id = $_GET['id'];
//echo $id;
// Consulta SQL para obtener la información del registro
$sql = "SELECT * FROM usuario WHERE idUsuario=:id";
$stmt = $db->prepare($sql);
$stmt->bindParam('id', $id);
$stmt->execute();
$registro = $stmt->fetch(PDO::FETCH_ASSOC);

if($registro){
echo '
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="../assets/CSS/register.css">
  </head>
  <body>

    <div class="register-box">
    <body>

<center>
<h2>Modificar Registro</h2>
<form action="../controlador/Ausuario.php" method="post" class="form" >
<input type="hidden" name="id" value="'. $registro['idUsuario'].'">
<label for="campo_modificar">Tipo de documento:</label>
<select class="form-control" name="tipoDocUsuario" required> 
<option value="'. $registro['tipoDocUsuario'].'">' . $registro['tipoDocUsuario'].'</option>
<option value="C.C.">C.C.</option>
<option value="T.I.">T.I.</option>
</select>

Número documento
<input type="text" name="noDocUsuario" value="'. $registro['noDocUsuario'].'" class="form-control" required> 
Nombres
<input type="text" name="nombreUsuario" value="' . $registro['nombreUsuario'].'" class="form-control" required>
Apellidos 
<input type="text" name="apellidoUsuario" value="' . $registro['apellidoUsuario'].'" class="form-control" required> Dirección
Direccion
<input type="text" name="direccionUsuario" value="'. $registro['direccionUsuario'].'" class="form-control" required> Teléfono
telefono
<input type="text" name="telefonoUsuario" value="'. $registro['telefonoUsuario'].'" class="form-control" required>
Correo
<input type="text" name="correoUsuario" value="'. $registro['correoUsuario'].'" class="form-control" required>
Contraseña 
<input type="text" name="passwordusuario" value="'. $registro['passwordusuario'].'" class="form-control" required>
<hr> 
<input type="submit" value="Modificar Registro">
</form>
</center>

</body>

    </div>
      </form>

  </body>
</html>

';
}
else {
    "registro no encontrado";
}