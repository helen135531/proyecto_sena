<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/CSS/style.css">
</head>

<body>container
    <header class="main-header">
        <div class="logo">
          <a href="#pp"><img src="../assets/img/tamales.png" alt=""></a>
        </div>
        <nav class="main-menu">
            <ul>
              <li><a href="#mapa"><img src="../assets/img/ubicacion-1.png" class="ubicacion" alt=""></a></li> 
            </ul>
          </nav>
        <div class="search-bar">
          <input type="text" placeholder="Buscar...">
          <button type="submit">Buscar</button>
        </div>
        
        <div class="user-links">
          <a href="vista/login.php"><img src="../assets/img/user-3.png" alt="" class="user"></a>
          <a href="#"><img src="../assets/img/pngwing.com.png" class="cesta" alt=""></a>
        </div>
      </header><br>

<?php




if(isset($_POST['agregarP'])){

    require_once("../modelo/db.php");
    $nombreP=$_POST['nombreP'];
    $precioP=$_POST['precioP'];

    try{

    $conexion= $db->prepare("INSERT INTO Producto(descripProducto,precioProducto,categoriaProducto,estadoProducto) VALUES
    (':nombre',:precio,'pasabocas','disponible'),");


    $conexion-> bindParam(':nombre',$nombreP);
    $conexion-> bindParam(':precio',$precioP);
    
    $conexion-> execute();

    echo"se agrego el producto";
    }
    catch(PDOException $e){
        echo "error D:". $e->getMessage();
    }
}


?>