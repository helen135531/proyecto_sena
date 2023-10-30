<?php
require_once ('db.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_a_borrar = $_GET['id'];

    try{
        $sql="DELETE FROM Producto WHERE idProducto = :id";
        $stmr = $db->prepare($sql);
        $stmr->bindParam("id",$id_a_borrar);
        $stmr->execute();

        $count = $stmr->rowCount(); 
        header ("location:../vista/verProductos.php");
        if($count > 0){
            echo "<script> alert('esta seguro de borrar este usuario?'); window.location.href = '../vista/verUsuario.php'; </script>";

        }
        else {
            echo "error al eliminar el registro: ". $e->getMensage();
        }

        
    } catch (PDOException $e){
        echo "error al eliminar el registro:" . $e->getMessage();
    }
    # code...
} else {
    echo "id no proporcionado";
}



?>