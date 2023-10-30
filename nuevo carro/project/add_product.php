<?php
include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   setcookie('user_id', create_unique_id(), time() + 60*60*24*30);
}

if(isset($_POST['add'])){
   $id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $price = $_POST['price'];
   $price = filter_var($price, FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $ext = pathinfo($image, PATHINFO_EXTENSION);
   $rename = create_unique_id().'.'.$ext;
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_files/'.$rename;

   if($image_size > 2000000){
      $warning_msg[] = 'Image size is too large!';
   }else{
      $add_product = $conn->prepare("INSERT INTO `products`(id, name, price, image) VALUES(?,?,?,?)");
      $add_product->execute([$id, $name, $price, $rename]);
      move_uploaded_file($image_tmp_name, $image_folder);
      $success_msg[] = 'Product added!';
   }
}

include 'components/connect.php';

// Procesar la solicitud de modificación
if (isset($_POST['update'])) {
    $product_id = $_POST['product_id']; // ID del producto a modificar
    $new_name = $_POST['new_name'];
    $new_price = $_POST['new_price'];

    // Ejecutar una consulta SQL para actualizar el producto
    $update_product = $conn->prepare("UPDATE `products` SET name = ?, price = ? WHERE id = ?");
    $update_product->execute([$new_name, $new_price, $product_id]);
    $success_msg[] = 'Producto actualizado con éxito.';
}

// Procesar la solicitud de eliminación
if (isset($_POST['delete'])) {
    $product_id = $_POST['product_id']; // ID del producto a eliminar

    // Ejecutar una consulta SQL para eliminar el producto
    $delete_product = $conn->prepare("DELETE FROM `products` WHERE id = ?");
    $delete_product->execute([$product_id]);
    $success_msg[] = 'Producto eliminado con éxito.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Product and Manage Products</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="product-form">

   <form action="" method="POST" enctype="multipart/form-data">
      <h3>INFORMACION DE PRODUCTOS</h3>
      <p>producto nombre <span>*</span></p>
      <input type="text" name="name" placeholder="enter product name" required maxlength="50" class="box">
      <p>producto precio <span>*</span></p>
      <input type="number" name="price" placeholder="enter product price" required min="0" max="9999999999" maxlength="10" class="box">
      <p>producto imagen <span>*</span></p>
      <input type="file" name="image" required accept="image/*" class="box">
      <input type="submit" class="btn" name="add" value="add product">
   </form>

</section>

<section class="product-form">
    <!-- Formulario para actualizar productos -->
    <form action="" method="POST">
        <h3>Modificar Producto</h3>
        <input type="text" name="product_id" placeholder="ID del producto a modificar" required>
        <input type="text" name="new_name" placeholder="Nuevo nombre" required>
        <input type="number" name="new_price" placeholder="Nuevo precio" required>
        <input type="submit" class="btn" name="update" value="Actualizar Producto">
    </form>

    <!-- Formulario para eliminar productos -->
    <form action="" method="POST">
        <h3>Eliminar Producto</h3>
        <input type="text" name="product_id" placeholder="ID del producto a eliminar" required>
        <input type="submit" class="btn" name="delete" value="Eliminar Producto">
    </form>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="js/script.js"></script>

<?php include 'components/alert.php'; ?>

</body>
</html>
