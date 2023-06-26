<?php
include("db_config/connect.php");
session_start();
if(!isset($_SESSION['logged_in'])){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="./CSS/style_shop.css">

</head>
<body>
    <?php require "header.php";?>
<section >

<div>
    
					<?php 
						$query = "SELECT * from item order by categories; ";

						$result = mysqli_query($con,$query);
					?>

					<?php if(mysqli_num_rows($result) > 0):?>
                        
                        <div style="background-color:white;display: flex;flex-wrap:wrap;border-radius: 10px;margin: 30px 40px;">
						<?php while ($row = mysqli_fetch_assoc($result)):?>
                            
                            <?php if($row['categories']== 'birthday'):?>
                                <form method="post" action="cart.php">
								<fieldset style="background-color:#ebebf9;display: flex;border:solid 3px #583672;border-radius: 10px;padding: 0px 10px;width:350px;margin:5px;"> 
                                <legend style=" width:18%;font-size:18px;background-color:#583672;color:#ebebf9;padding:6px;border-radius:8px;">Birthday</legend>              
									<img src="<?=$row['image'];?>" style="border-radius:5%;margin:30px;width:160px;height:280px;object-fit: cover;">
									<br>
                                    <div style="margin-top:90px;color:#583672;text-transform: capitalize;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
									<b>Name:</b><?=$row['name']?><br>
                                    <b>Price:</b><?=$row['price']?>$<br>
                                    <b>Flavor:</b><?=$row['flavor']?><br>
                                    <b>Size:</b><?=$row['size']?><br>
                                    <input type="number" min="1" max="10" name="product_quantity" value="1">
                                    <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
                                    <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                                    <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
         
                           
                                    <input type="submit" value="add to cart" name="addtocart" class="addtocart">
                                    </div>
                                    </fieldset>
                                    </form>
										<br>
									 
                                 <?php elseif($row['categories']== 'wedding'):?>
                                <form method="post" action="cart.php" >
								<fieldset style="background-color:#fffcd6;display: flex;border:solid 3px #583672;border-radius: 10px;padding: 0px 10px;width:350px;margin:5px">
                                <legend style="width:18%;font-size:18px;background-color:#583672;color:#E8D86F;padding:6px;border-radius:8px;">Wedding</legend>
									<img src="<?=$row['image']?>" style="border-radius:5%;margin:30px;width:160px;height:280px;object-fit: cover;">
									<br>
                                    <div style="margin-top:90px;color:#583672;text-transform: capitalize;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
									<b>Name:</b><?=$row['name']?><br>
                                    <b>Price:</b><?=$row['price']?>$<br>
                                    <b>Flavor:</b><?=$row['flavor']?><br>
                                    <b>Size:</b><?=$row['size']?><br>
                                    <input type="number" min="1" max="10" name="product_quantity" value="1">
                                    <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
                                    <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                                    <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                                    
                                    <input type="submit" value="add to cart" name="addtocart" class="addtocart">
                                 </div>
                                 </fieldset>
                                    </form>	<br>
                                    <?php elseif($row['categories']== 'cupcake'):?>
                                <form method="post" action="cart.php" >
								<fieldset style="background-color:#ffe0e0;display: flex;border:solid 3px #583672;border-radius: 10px;padding: 0px 10px;width:350px;margin:5px">
                                <legend style="width:18%;font-size:18px;background-color:#583672;color:#ffe0e0;padding:6px;border-radius:8px;">Cupcake</legend>
									<img src="<?=$row['image']?>" style="border-radius:5%;margin:30px;width:160px;height:280px;object-fit: cover;">
									<br>
                                    <div style="margin-top:90px;color:#583672;text-transform: capitalize;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
									<b>Name:</b><?=$row['name']?><br>
                                    <b>Price:</b><?=$row['price']?>$<br>
                                    <b>Flavor:</b><?=$row['flavor']?><br>
                                    <b>Size:</b><?=$row['size']?><br>
                                    <input type="number" min="1" max="10" name="product_quantity" value="1">
                                    <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
                                    <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                                    <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                                    
                                    <input type="submit" value="add to cart" name="addtocart" class="addtocart">
                                 </div>
                                 </fieldset>
                                    </form>
										<br>
                                    
                                 
								

                        
                            <?php endif;?>
                         
						<?php endwhile;?>
					<?php endif;?>
                        </div>

    </div>
</section>
<?php require "footer.php"?>
</body>
</html>