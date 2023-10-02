<?php




if(isset($_POST['agregarP'])){

    require_once("../modelo/db.php")
    $nombreP=$_POST['nombreP'];
    $precioP=$_POST['precioP'];

    try

    $conexion= $db->prepare("INSERT INTO Producto(descripProducto,precioProducto,categoriaProducto,estadoProducto) VALUES
    (':nombre',:precio,'pasabocas','disponible'),")


    $conexion-> bindParam(':nombre',$nombreP);
    $conexion-> bindParam(':precio',$precioP);
    
    $conexion-> execute();

    echo"se agrego el producto";
    
    catch(PDOExcetion $e){
        echo "error D:". $e->getMessage();
    }
}


?>