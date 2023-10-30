<?php
session_start();
include('../modelo/db.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];

    $tipodoc = $_POST['tipoDocUsuario'];
    $numdoc = $_POST['noDocUsuario'];
    $nombre = $_POST['nombreUsuario'];
    $apellido = $_POST['apellidoUsuario'];
    $direccion = $_POST['direccionUsuario'];
    $telefono = $_POST['telefonoUsuario']; 
    $correo = $_POST['correoUsuario']; 
    $password = $_POST['passwordusuario'];

    $sql = "UPDATE usuario SET tipoDocUsuario=:tipodoc, noDocUsuario=:numdoc, nombreUsuario=:nombre, apellidoUsuario=:apellido, direccionUsuario=:direccion, telefonoUsuario=:telefono, correoUsuario=:correo, passwordUsuario=:pass WHERE idUsuario=:id";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':tipodoc', $tipodoc);
    $stmt->bindParam(':numdoc', $numdoc);
    $stmt->bindParam(':nombre', $nombre); 
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':direccion', $direccion);
    $stmt->bindParam(':telefono', $telefono); 
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':pass', $password);
    $stmt->execute();

    if ($stmt) {
        if ($_SESSION["Rol"]== 1){
            header('location:../vista/datos.php');
        }
        else if ($_SESSION["Rol"]== 3){
            header('location:../vista/verUsuario.php');
        }
    } 
    else {
        echo "Error al modificar el registro.";
    }
}

     



