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

else if($_SESSION["Rol"]== 3){
    require '../modelo/db.php';
    $consulta= $db->prepare(" SELECT * FROM usuario;");
    $consulta->execute();
    $usuario = $consulta->fetch(PDO::FETCH_ASSOC);
    
    ?>
    
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
       <h1>
       <br>
       <br>
       <br>
       <br>
       <h1 id="B">BIENVENIDO <?php echo $_SESSION['Nombre'];?></h1>
        <h2><a href="verUsuario.php">usuarios</a></h2>
        <h2><a href="verProductos.php">productos</a></h2>
        <h2><a href=" ../reportes_pdf/Reporte.php">Reportes de Pedidos</a></h2>
        <h2><a href="vistaU.php">vista previa pagina principal</a></h2>
        <h2><a href="../controlador/salir.php">salir</a></h2>

        
    
       </h1>
    
         <main class="products">
            <div class="tabs container">
    
    
                <input type="radio" name="tabs" id="tab1" checked="checked" class="tabInput" value="1">
                <label for="tab1" id="productos" class="pro">ACHIRAS</label>
    
                <div class="tab" >
                    <div class="swiper mySwiper-2" id="swiper1" >
                        <div class="swiper-wrapper">
    
                            
                            <div class="swiper-slide">
                            <div class="product">
                            <div class="product-img">
                                <h1>Unidad</h1>
                                <img src="../assets/img/panderos.png" alt="">
                            </div>
                            <div class="product-txt">
                                <h4>Panderos huilenses</h4>
                                <p>calida premium</p>
                                <span class="price" >$13.000</span>
                                <div class="botones">
                                    <a href="#" class="btn-1">comprar</a>
                                </div>
                           </div>
                       </div>
                  </div>
                  
    
                  <div class="swiper-slide">
                    <div class="product">
                    <div class="product-img">
                        <h1>Unidad</h1>
                        <img src="../assets/img/biscochodemaiz.png" alt="">
                    </div>
                    <div class="product-txt">
                        <h4>biscocho de maiz</h4>
                        <p>calida premium</p>
                        <span class="price" >$17.000</span>
                        <div class="botones">
                            <a href="#" class="btn-1">comprar</a>
                        </div>
                   </div>
               </div>
          </div>
    
          <div class="swiper-slide">
            <div class="product">
            <div class="product-img">
                <h1>Unidad</h1>
                <img src="../assets/img/alfadoques.png" alt="">
            </div>
            <div class="product-txt">
                <h4>Alfadoques</h4>
                <p>calida premium</p>
                <span class="price" >$10.000</span>
                <div class="botones">
                    <a href="#" class="btn-1">comprar</a>
                </div>
           </div>
       </div>
    </div>
    
    
              </div>
              <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
          </div>
        </div>
    
        <input type="radio" name="tabs" id="tab2" checked="checked" class="tabInput" value="2">
        <label for="tab2">EMBUELTOS</label>
    
        <div class="tab">
            <div class="swiper mySwiper-2" id="swiper2">
                <div class="swiper-wrapper">
    
                    
                    <div class="swiper-slide">
                    <div class="product">
                    <div class="product-img">
                        <h1>Unidad</h1>
                        <img src="../assets/img/quesillo.png" alt="">
                    </div>
                    <div class="product-txt">
                        <h4>Quesillo</h4>
                        <p>calida premium</p>
                        <span class="price" >$12.000</span>
                        <div class="botones">
                            <a href="#" class="btn-1">comprar</a>
                        </div>
                   </div>
               </div>
          </div>
          
    
          <div class="swiper-slide">
            <div class="product">
            <div class="product-img">
                <h1>Unidad</h1>
                <img src="../assets/img/embueltodemasato.png" alt="">
            </div>
            <div class="product-txt">
                <h4>Embuelto de masato</h4>
                <p>calida premium</p>
                <span class="price" >$7.000</span>
                <div class="botones">
                    <a href="#" class="btn-1">comprar</a>
                </div>
           </div>
       </div>
    </div>
    
    <div class="swiper-slide">
    <div class="product">
    <div class="product-img">
        <h1>Unidad</h1>
        <img src="../assets/img/azadohulense.png" alt="">
    </div>
    <div class="product-txt">
        <h4>Azado huilense</h4>
        <p>calida premium</p>
        <span class="price" >$80.000</span>
        <div class="botones">
            <a href="#" class="btn-1">comprar</a>
        </div>
    </div>
    </div>
    </div>
    
    
      </div>
      <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
    </div>
    </div>
    
    <input type="radio" name="tabs" id="tab3" checked="checked" class="tabInput" value="3">
    <label for="tab3">OTROS</label>
    
    <div class="tab">
        <div class="swiper mySwiper-2" id="swiper3">
            <div class="swiper-wrapper">
    
                
                <div class="swiper-slide">
                <div class="product">
                <div class="product-img">
                    <h1>Unidad</h1>
                    <img src="../assets/img/kolacondor.png" alt="">
                </div>
                <div class="product-txt">
                    <h4>kola condor</h4>
                    <p>calida premium</p>
                    <span class="price" >$2.500</span>
                    <div class="botones">
                        <a href="#" class="btn-1">comprar</a>
                    </div>
               </div>
           </div>
      </div>
      
    
      <div class="swiper-slide">
        <div class="product">
        <div class="product-img">
            <h1>Unidad</h1>
            <img src="../assets/img/bizcochuelo.png" alt="">
        </div>
        <div class="product-txt">
            <h4>Bizcochuelo</h4>
            <p>calida premium</p>
            <span class="price" >$7.000</span>
            <div class="botones">
                <a href="#" class="btn-1">comprar</a>
            </div>
       </div>
    </div>
    </div>
    
    <div class="swiper-slide">
    <div class="product">
    <div class="product-img">
    <h1>Unidad</h1>
    <img src="../assets/img/cucashulenses.png" alt="">
    </div>
    <div class="product-txt">
    <h4>Cucas huilenses</h4>
    <p>calida premium</p>
    <span class="price" >$7.000</span>
    <div class="botones">
        <a href="#" class="btn-1">comprar</a>
    </div>
    </div>
    </div>
    </div>
    
    
    </div>
    <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    </div>
     
    </div>
       </main>
    
       <section class="info container">
        <div class="info-img"> 
            <img src="img/lo.png" alt="">
        </div>
        <div class="info-txt">
            <h2>informacion</h2>
            <p>
                Descubre el sabor auténtico del Huila, donde los tamales,
                 las cucas y las achiras crujientes son el deleite de 
                 todos. Sumérgete en nuestra tradición culinaria única y refréscate
                  con el aguardiente doble anis. ¡Bienvenido a una experiencia gastronómica
                   inolvidable en el corazón del Huila! 
            </p>
            <a href="#" class="btn-2">mas informacion</a>
       </div>
       </section>
    
       <section class="horario">
        <div class="horario-info container">
            <h2>horario</h2>
            <div class="horario-txt">
                <div class="txt">
                    <h4>direccion</h4>
                    <p>
                        hola
                    </p>
                    <p>
                        como estan
                    </p>
                </div>
                <div class="txt">
                    <h4>horario</h4>
                    <p>
                        8:00
                    </p>
                    <p>
                        6:00
                    </p>
                </div>
                <div class="txt">
                    <h4>telefono</h4>
                    <p>
                        3254678543
                    </p>
                    <p>
                        3247654853
                    </p>
                </div>
                <div class="txt">
                    <h4>redes dociales</h4>
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
            </div>
        </div>
    
       </section>
       <section>
        <iframe class="map" id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254508.51141489705!2d-74.107807!3d4.64829755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses-419!2sco!4v1692341781498!5m2!1ses-419!2sco" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </section>
    
       <footer class="footer container">
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
    
    
    
       
    
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="../assets/javascript/script.js"></script>
    </body>
    
    </html> <?php
}

