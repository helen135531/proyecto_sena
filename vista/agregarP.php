
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

<br><br><br><br><br><br><br><br>

<form action="../controlador/Aproductos.php" method="post" id="B">
        <!-- USERNAME INPUT -->
        <label for="username">nombre del producto</label> <br>
        <input type="text" placeholder="nombre del producto" name="nombreP"> <br>
        <!-- PASSWORD INPUT -->
        <label for="password">precio producto</label>  <br>
        <input type="number" placeholder="Ingrese Password" name="precioP"><br>

        
        <input type="submit" value="agregar" name="enviar">
    
      </form>

</form>
<?php }
echo "hola mundo :D";

