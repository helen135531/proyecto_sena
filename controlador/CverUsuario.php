<?php
require_once('../modelo/db.php');

$sql = "SELECT * FROM usuario;";
$stmt = $db-> prepare($sql);
$stmt->execute();
?>

<table border="1">
    <tr>
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

    <?php
    $numero =1;
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
    <tr>
        <td> <?php echo $numero ?></td>
        <td> <?php echo $row['tipoDocUsuario'] ?></td>
        <td> <?php echo $row['noDocUsuario'] ?></td>
        <td> <?php echo $row['nombreUsuario'] ?></td>
        <td> <?php echo $row['apellidoUsuario'] ?></td>
        <td> <?php echo $row['direccionUsuario'] ?></td>
        <td> <?php echo $row['telefonoUsuario'] ?></td>
        <td> <?php echo $row['correoUsuario'] ?></td>
        <td> <?php echo $row['passwordusuario'] ?></td>
        <td> <?php echo $row['fotoUsuario'] ?></td>
        <td> <?php echo $row['estadoUsuario'] ?></td>
        <td> <?php 
        if($row['idRolUsuarioFK'] == 1){
            echo "usuario";
        } 
        if($row['idRolUsuarioFK'] == 2){
            echo "domiciliario";
        }
        if($row['idRolUsuarioFK'] == 3){
            echo "administrador";
        }?></td>
        <td><a href="../modelo/Eusuario.php?id=<?php echo $row['idUsuario']?> ">eliminar</a></td>
        <td><a href="../modelo/Ausuario.php?id=<?php echo $row['idUsuario']?> ">modificar</a></td>


    </tr> <?php
    $numero ++;
    }?>
</table>