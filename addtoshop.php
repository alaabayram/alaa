<?php 
include("db_config/connect.php");
session_start();


if(!isset($_SESSION['logged_in']) && $user['position']==0){
       
    header('location: login.php');
}


if (isset($_POST["submit"])) {
$name=$_POST['name'];
$categories=strtolower($_POST['categorie']);
$price=$_POST['price'];
$size=$_POST['size'];
$flavor=$_POST['flavor'];
$image = "";
    if(!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0 && $_FILES['image']['type'] == "image/jpeg"){
        $folder = "images/";
        if(!file_exists($folder))
        {
            mkdir($folder,0777,true);
        }

        $image = $folder . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $image);

$sql="INSERT INTO item (image,name,flavor,size,price,categories) values ('$image','$name','$flavor','$size','$price','$categories')";
$result = mysqli_query($con, $sql);
}}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add to shop</title>
    <link rel="stylesheet" href="./CSS/admin_style.css">

</head>
<body>
<?php require "adminheader.php";?>
    <div class="additem" >
        <h2 align="center">ADD ITEMS</h2>
<form method="post" enctype="multipart/form-data" action="addtoshop.php" ><br>
    Image:<br><input type="file" name="image"><br>
    Name:<br><input type="text" name="name"><br>
    Categorie:<br><input type="text" name="categorie"><br>
    Price:<br><input type="text" name="price"><br>
    size:<br><input type="text" name="size"><br>
    Flavor:<br><input type="text" name="flavor"><br>
    <button class="submit" name="submit">ADD</button>
</form>

</div>
   
    <posts>
					<?php 
						$query = "SELECT * from item ";

						$result = mysqli_query($con,$query);
					?>

					<?php if(mysqli_num_rows($result) > 0):?>
                        <div style="background-color:white;display: flex;flex-wrap:wrap;">
						<?php while ($row = mysqli_fetch_assoc($result)):?>
							<div style="background-color:white;display: flex;border-radius: 10px;margin: 10px;">
								<div style="background-color:white;display: flex;border:solid 3px #583672;border-radius:20px;padding:5px;">
									<img src="<?=$row['image']?>" style="border-radius:5%;margin:30px;width:160px;height:280px;object-fit: cover;">
									<br>
                                    <div style="margin-top:90px;color:#583672;text-transform: capitalize;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
									<?=$row['name']?><br>
                                    <?=$row['price']?><br>
                                    <?=$row['flavor']?><br>
                                    <?=$row['size']?><br>
									<a href="editdelete.php?action=editpost&id=<?= $row['id']?>" style="text-decoration: none;">
											<button class="submit" >Edit</button>
									</a>

									<a href="editdelete.php?action=deletepost&id=<?= $row['id']?>"  style="text-decoration: none;">
											<button class="submit" >Delete</button>
									</a>
										<br>
                                </div> 
                                </div> 
								</div>
								
							
						<?php endwhile;?>
					<?php endif;?>
				</posts>   
 



</body>
</html>