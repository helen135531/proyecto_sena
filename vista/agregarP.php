<form action="../controlador/Aproductos.php" method="post">
<input type="text" name="nombreP" id="" placeholder="ingresa nombre del producto">
<input type="number" name="precioP" id="" placeholder="ingresa precio">
<input type="submit" value="agregar" name="agregarP">

<?php
require_once('../controlador/Aproductos.php')


?>
</form>
<?php
echo "hola mundo :D";

?>