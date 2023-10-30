<?PHP
include '../nuevo carro/project/components/connect.php'; 
//conexion base de datos
/*$server = "localhost";//servidor:localhost
$user= "root";//usuario root
$pass= "";//contraseña de la base de datos,se deja en blanco si no tiene contraseña
$db="proyecto_sena";//nombre de la base de datos
$conexion = new mysqli($server,$user,$pass,$db);*/

//----------------------------------------------

/*try{
    $db = new PDO('mysql:host=localhost; dbname=proyecto_sena', "root", "");
    
  }catch( PDOException $e){
  echo "error de conexion";
  exit;
}
*/
try{
  $db = new PDO('mysql:host=bolitcm17gznhmyd2rid-mysql.services.clever-cloud.com; dbname=bolitcm17gznhmyd2rid', "u72q3w71kdtf2fwb", "tosAeqYNLOGJg791qFlA");
  
}catch( PDOException $e){
echo "error de conexion";
exit;
}

if($db){
 echo "conexion exitosa";
}


?>