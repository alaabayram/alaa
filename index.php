<?php
include("db_config/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Cake Couture</title>
</head>
<body>

<?php require "header.php"?>

<div class="slidershow middle">

<div class="slides">
  <input type="radio" name="r" id="r1" checked>
  <input type="radio" name="r" id="r2">
  <input type="radio" name="r" id="r3">
  <input type="radio" name="r" id="r4">
  <div class="slide s1">
    <img src="./images/cake33.jpg" alt="">
  </div>
  <div class="slide">
    <img src="./images/cake35.jpg" alt="">
  </div>
  <div class="slide">
    <img src="./images/cake36.jpg" alt="">
  </div>
  <div class="slide">
    <img src="./images/cake37.jpg" alt="">
  </div>
</div>

<div class="navigation">
  <label for="r1" class="bar"></label>
  <label for="r2" class="bar"></label>
  <label for="r3" class="bar"></label>
  <label for="r4" class="bar"></label>
</div>
</div>

<fieldset class="products">
    <legend>Some of our cakes</legend>
    <div>
    <?php
        $query = "SELECT * from item order by date DESC limit 6; ";
        $result = mysqli_query($con,$query); 
        ?>
        <?php if(mysqli_num_rows($result) > 0):?>

           <?php while ($row = mysqli_fetch_assoc($result)):?>
           <img src="<?=$row['image']; ?>" height="250px" width="230px">
           <?php endwhile;?>
           <?php endif;?> 
           <a href="shop.php" style="text-decoration: none;">
<button class="submit">Order Now!</button>  
</a>
                   
         
    
    </div>
</fieldset>
<fieldset class="sizes_info">
<h1>Size Catalogue:</h1>
<ul><b>
<li>1 Pcs: 1 person</li>
<li>Small: 6-8 persons</li>
<li>Medium: 10-15 persons</li>
<li>L: 20-25 persons</li>
<li>XL: 45-50 persons</li>
<li>XXL: 95-100 persons</li>
</b>
</ul>
<img src="./images/peoples.jpg">
</fieldset>

<a href="#" class="top">&#8593</a>

<?php require "footer.php"?>
</body>
</html>