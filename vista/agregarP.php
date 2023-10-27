<?php
session_start();
if ($_SESSION["Rol"]== 1){
    echo '<script>alert("no tienes los permisos necesarios");</script>';
    header("location:vistaU.php");
    die();
}
else if ($_SESSION["Rol"]== null || $_SESSION["Rol"]== ""){
    echo "primero inicia sesion";
    ?><a href="login.php"> inicia session</a> <?php
    die();
}

else if($_SESSION["Rol"]== 3){?>
<form action="../controlador/Aproductos.php" method="post">
<input type="text" name="nombreP" id="" placeholder="ingresa nombre del producto">
<input type="number" name="precioP" id="" placeholder="ingresa precio">
<input type="submit" value="agregar" name="agregarP">
<br><br><br><br><br><br><br><br>
<?php
require_once('../controlador/Aproductos.php')


?>
</form>
<?php }
echo "hola mundo :D";

