<?php

require "../modelo/db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $tDocumento = $_POST['Tdocumento'];
    $noDocumento = $_POST['noDocumento'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    try{
        $sql = "INSERT INTO Usuario (tipoDocUsuario,noDocUsuario,nombreUsuario,apellidoUsuario,direccionUsuario,telefonoUsuario,correoUsuario,passwordusuario,estadoUsuario,idRolUsuarioFK) VALUE 
        ('$tDocumento','$noDocumento','$nombre','$apellido','$direccion',$telefono,'$correo','$pass','inactivo',1)";
       $stmt=$db->prepare($sql);
        $stmt->execute();

        echo "registrado correctamente";

    }   
    catch(PDOException $e){
        echo "error al insertar registro";
    }

}

