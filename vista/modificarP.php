<?php 

require_once('../modelo/db.php'); // Incluye el archivo de conexión a la base
$id = $_GET['id'];
//echo $id;
// Consulta SQL para obtener la información del registro
$sql = "SELECT * FROM Producto WHERE idProducto=:id";
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
<form action="../controlador/Mproducto.php?id='.$id.'" method="post" class="form" >
nombre
<input type="text" name="nombreP" value="'. $registro['descripProducto'].'" class="form-control" required>
precio
<input type="text" name="precioP" value="'. $registro['precioProducto'].'" class="form-control" required>
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