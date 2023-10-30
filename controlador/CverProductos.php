<?php
require_once('../modelo/db.php');

$sql = "SELECT * FROM Producto;";
$stmt = $db-> prepare($sql);
$stmt->execute();
?>

<table border="1">
  <!--  <tr>
        <th>#</th>
        <th>tipo</th>
        <th>numero</th>
        <th>nombres</th>
        <th>apellidos</th>
        <th>direccion</th>
        <th>telefono</th>
        <th>correo</th>
        <th>contraseña</th>
        <th colspan="2">estado</th>
    </tr>
-->
    <?php
    $numero =1;
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
    <tr>
        <td> <?php echo $numero ?></td>
        <td> <?php echo $row['descripProducto'] ?></td>
        <td> <?php echo $row['precioProducto'] ?></td>
        <td> <?php echo $row['categoriaProducto'] ?></td>
        <td> <?php echo $row['estadoProducto'] ?></td>
        
        <td><a href="../modelo/Eusuario.php?id=<?php echo $row['idProducto']?> ">eliminar</a></td>
        <td><a href="../vista/modificarU.php?id=<?php echo $row['idProducto']?> ">modificar</a></td>


    </tr> <?php
    $numero ++;
    }?>
</table>