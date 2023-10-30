<?php






    require_once("../modelo/db.php");

    $id= $_GET['id'];


    //demas
    $nombreP=$_POST['nombreP'];
    $precioP=$_POST['precioP'];


    try{
    $sql = "UPDATE Producto SET descripProducto='$nombreP', precioProducto='$precioP' WHERE idProducto= $id ; ";
    $conexion= $db->prepare($sql);


    
    
    $conexion-> execute();

    echo"se agrego el producto";
    header('location:../vista/verProductos.php');
    }
    catch(PDOException $e){
        echo "error D:". $e;
    }



?>