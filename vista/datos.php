<?php session_start();?>
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
          <a href="../index.php"><h2>volver</h2></a>
          <a href="#"><img src="../assets/img/pngwing.com.png" class="cesta" alt=""></a>
        </div>
        <div class="CS"> 
            <a href="../controlador/salir.php" style="color:aliceblue"><h2>salir</h2></a>
      </header>
        <br><br><br><br><br><br><br><br>
        <h1>datos del usuario (<?php echo $_SESSION['id'];?>)</h1>
          
        
      <?php 


      
require_once('../modelo/db.php');

$sql = 'SELECT * FROM usuario where idUsuario=:id;';
$stmt = $db-> prepare($sql);
$stmt -> bindParam(':id',$_SESSION['id']);
$stmt->execute();
?>

<h2>
    <?php
    $numero =1;
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      
         
         echo "tipo de documento ".$row['tipoDocUsuario']."<br>" ;
         echo "numero de documento: ".$row['noDocUsuario']."<br>" ;
         echo "nombre: ".$row['nombreUsuario']."<br>" ;
         echo "apellidos: ".$row['apellidoUsuario']."<br>"; 
         echo "direccion: ".$row['direccionUsuario']."<br>"; 
         echo "telefono: ".$row['telefonoUsuario']."<br>";
         echo "correo: ".$row['correoUsuario']."<br>";
         echo "contraseña: ".$row['passwordusuario']."<br>";
        
        echo "tipo";
        if($row['idRolUsuarioFK'] == 1){
            echo "usuario";
        } 
        if($row['idRolUsuarioFK'] == 2){
            echo "domiciliario";
        }
        if($row['idRolUsuarioFK'] == 3){
            echo "administrador";
        }
        ?><br><td><a href="../vista/modificarU.php?id=<?php echo $row['idUsuario']?> ">modificar</a></td><?php
     } ?> </h2>
        <br><br><br><br><br><br><br><br><br><br><br>
   <!--   <footer class="footer container">
          <img class="logo-2" src="../assets/img/tamales.png" alt="">
          <div class="links">
            <h4>loren</h4>
            <ul>
               <li><a href="#">loren</a></li>
               <li><a href="#">loren</a></li>
               <li><a href="#">loren</a></li>
               <li><a href="#">loren</a></li>
            </ul>        
        </div>
        <div class="links">
            <h4>loren</h4>
            <ul>
               <li><a href="#">loren</a></li>
               <li><a href="#">loren</a></li>
               <li><a href="#">loren</a></li>
               <li><a href="#">loren</a></li>
            </ul>        
        </div>
        <div class="links">
            <h4>loren</h4>
            <ul>
               <li><a href="#">loren</a></li>
               <li><a href="#">loren</a></li>
               <li><a href="#">loren</a></li>
               <li><a href="#">loren</a></li>
            </ul>        
        </div>
        <div class="links">
            <div class="social">
                <a href="#">
                   <div class="social">
                       <img src="../assets/img/s1.svg" alt="">
                   </div>
                </a>
                <a href="#">
                   <div class="social">
                       <img src="../assets/img/s2.svg" alt="">
                   </div>
                </a>
                <a href="#">
                   <div class="social">
                       <img src="../assets/img/s3.svg" alt="">
                   </div>
                </a>
            </div>
        </div>
   </footer>
    -->