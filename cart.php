<?php
session_start();
include("db_config/connect.php");


if(!isset($_SESSION['logged_in'])){
    header('location: login.php');
}else{
   $user_id=$_SESSION['id'];
}


if(isset($_POST['addtocart'])){

    $user_id=$_SESSION['id'];
    $productname = $_POST['product_name'];
    $price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

   $select_cart = mysqli_query($con, "SELECT * FROM cart WHERE name = '$productname' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart!';
   }else{
      mysqli_query($con, "INSERT INTO cart (user_id, name, price, image, quantity) VALUES('$user_id', '$productname', '$price', '$product_image', '$product_quantity')") or die('query failed');
      $message[] = 'product added to cart!';
   }
}
if(isset($_POST['update_cart'])){
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($con, "UPDATE cart SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
    $message[] = 'cart quantity updated successfully!';
 }
 
 if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($con, "DELETE FROM cart WHERE id = '$remove_id'") or die('query failed');
    header('location:cart.php');
 }
   
 if(isset($_GET['delete_all'])){
    mysqli_query($con, "DELETE FROM cart WHERE user_id = '$user_id'") or die('query failed');
    header('location:cart.php');
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="./CSS/style_cart.css">
   <title>The cart</title>
   

</head>
<body>
    <?php require "header.php"?>
<div class="shopping-cart">

<h1>shopping cart</h1>

<table>
   <tbody>
      <tr>
         <th>Image</th>
         <th>Name</th>
         <th>Unit Price</th>
         <th>Quantity</th>
         <th>Total Price</th>

      </tr>
   <?php
      $cart_query = mysqli_query($con, "SELECT * FROM cart WHERE user_id = '$user_id'");
      $total = 0;
      if(mysqli_num_rows($cart_query) > 0){
         while($fetch_cart = mysqli_fetch_assoc($cart_query)){
   ?>
      <tr>
         <td><img src="<?=$fetch_cart['image']; ?>" height="100"></td>
         <td><?= $fetch_cart['name']; ?></td>
         <td><?= $fetch_cart['price']; ?>$</td>
         <td>
            <form method="post">
               <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
               <input type="number" min="1"  name="cart_quantity" value="<?= $fetch_cart['quantity']; ?>">
               <input type="submit" name="update_cart" value="update" class="submit">
            </form>
         </td>
         <td><?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>$</td>
         <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">remove</a></td>
      </tr>
   <?php
      $total += $sub_total;
         }
      }else{
         echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
      }
   ?>
   <tr class="table-bottom">
      <td colspan="4">Total :</td>
      <td><?= $total; ?>$</td>
      <td><a href="cart.php?delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($total > 1)?'':'disabled'; ?>">delete all</a></td>
   </tr>
</tbody>
</table>
</div>

</div>
 
<?php require "footer.php";?>
</body>
</html>
