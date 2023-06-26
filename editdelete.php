<?php
include("db_config/connect.php");
session_start();
$id = $_GET['id'];

if(!isset($_SESSION['logged_in']) && $user['position']==0){
       
    header('location: login.php');
}


if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['action']) && $_POST['action'] == 'deletepost' )
	{
		$id = $_GET['id'];
        $query="SELECT * from item where id = $id";
        $result= mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['post_info']=$row;
        }

		$query = "DELETE from item where id = '$id' limit 1";
		$result = mysqli_query($con,$query);
		header("Location: addtoshop.php");
		die;

	}
elseif($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['action']) && $_POST['action'] == 'editpost' )
{
    $id = $_GET['id'];
    $query="SELECT * from item where id = $id";
    $result= mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['post_info']=$row;
    }

    

    $id=$_SESSION['post_info']['id'];
    $name=addslashes($_POST['name']);
    $categories=addslashes($_POST['categories']);
    $price=addslashes($_POST['price']);
    $size=addslashes($_POST['size']);
    $flavor=addslashes($_POST['flavor']);

    $sql = "UPDATE item SET  name='$name', flavor='$flavor', size='$size', price='$price', categories='$categories' WHERE id='$id'";

        $result = mysqli_query($con, $sql); 
        $query="SELECT * from item where id = $id";
        $result= mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['post_info']=$row;
        }
        header("location: addtoshop.php");
        die;

}
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
<?php if(!empty($_GET['action']) && $_GET['action'] == 'deletepost' && (!empty($_GET['id']))):
    $id=$_GET['id'];
    $query = "SELECT * FROM item WHERE id = $id";
    $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result) >0){
            $item=mysqli_fetch_assoc($result);
            $_SESSION['post_info']=$item;
    }
    ?>

<h2 style="text-align: center;">Are you sure you want to delete this item??</h2>

<div style="margin: auto;max-width: 600px;text-align: center;">
    <form method="post" style="margin: auto;padding:10px;">
        
        <img src="<?php echo $_SESSION['post_info']['image']?>" style="width: 100px;height: 100px;object-fit: cover;margin: auto;display: block;">
        <div><?php echo $_SESSION['post_info']['name']?></div>
        <input type="hidden" name="action" value="deletepost">
        <button>Delete</button>
        <a href="addtoshop.php">
            <button type="button">Cancel</button>
        </a>
    </form>
</div>
<?php elseif(!empty($_GET['action']) && $_GET['action'] == 'editpost' && (!empty($_GET['id']))):
$id=$_GET['id'];
$query = "SELECT * FROM item WHERE id = $id";
$result = mysqli_query($con,$query);
    if(mysqli_num_rows($result) >0){
        $item=mysqli_fetch_assoc($result);
        $_SESSION['post_info']=$item;}
    ?>
    <h2 style="text-align: center;">Edit item:</h2>
    <form method="post" enctype="multipart/form-data" action="editdelete.php?id=<?= $id?>" ><br>

    <img src="<?php echo $_SESSION['post_info']['image']?>" style="width:9%;display:block;">
    <input value="<?php echo $_SESSION['post_info']['name']?>" type="text" name="name" placeholder="name" required><br>
    <input value="<?php echo $_SESSION['post_info']['price']?>" type="text" name="price" placeholder="price" required><br>
    <input value="<?php echo $_SESSION['post_info']['flavor']?>" type="text" name="flavor" placeholder="flavor" required><br>
    <input value="<?php echo $_SESSION['post_info']['size']?>" type="text" name="size" placeholder="size" required><br>
    <input value="<?php echo $_SESSION['post_info']['categories']?>" type="text" name="categories" placeholder="categories" required><br>
    <input type="hidden" name="action" value="editpost">
    <button>SAVE</button>
    <a href="addtoshop.php">
            <button type="button">Cancel</button>
        </a>
</form>
<?php else:?>

<?php endif;?>
</body>
</html>