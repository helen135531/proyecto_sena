<?php 

if($_POST){
    
    
    require '../modelo/db.php';
            $email=$_POST['usuario'];
            $password=$_POST['pass'];   

            $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
            $_SESSION['usuario']=$email;  
            $_SESSION['pass']=$password;

            

            $consulta= $db->prepare(
            "SELECT * from usuario WHERE correoUsuario= :e AND passwordusuario= :p; 
             SELECT * FROM usuario;"
             );
            $consulta->bindParam(":e", $email);
            $consulta->bindParam(":p", $password);
            $consulta->execute();
            $usuario = $consulta->fetch(PDO::FETCH_ASSOC);
           

            $_SESSION['Rol'] = $usuario["idRolUsuarioFK"];
            $_SESSION['Nombre'] = $usuario["nombreUsuario"];
            $_SESSION['id'] = $usuario["idUsuario"];
        

            if($usuario){

                if ($usuario["idRolUsuarioFK"]==1) {
                     echo "hola usuario";
                     header ("location:../vista/vistaU.php");
                }
                else if ($usuario["idRolUsuarioFK"]==2) {
                    echo "hola administrador";
                    header ("location:../vista/vistaD.php");
                }
                else if ($usuario["idRolUsuarioFK"]==3) {
                    echo "hola administrador";
                    header ("location:../vista/vistaA.php");
                }
                else {
                    echo "no >:c";
                }

               /* */
            }
            else{

                echo 'usuraio o contraseña incorrectos';
                
            }


            


        }

            ?>