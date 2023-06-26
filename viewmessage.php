<?php
    include("db_config/connect.php");
    session_start();

    if(!isset($_SESSION['logged_in']) && $user['position']==0){
       
        header('location: login.php');
    }
    

    if(isset($_GET['action'])){
		if($_GET['action']=='deletemessage'){
			if(isset($_GET['id'] ))
{
	
	$id = $_GET['id'];
	$query = "DELETE FROM contact WHERE id = '$id' limit 1";
	$result = mysqli_query($con,$query);
}}}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake Couture</title>
    <link rel="stylesheet" href="CSS/view_style.css">
</head>
<body>
    <header>
        <?php require 'adminheader.php'?>
    </header>
<div margin=30%></div>
<?php
$query="SELECT * FROM contact order by date desc";
$result=mysqli_query($con,$query);
?>
<?php if(mysqli_num_rows($result)>0):?>
    <?php while ($msg=mysqli_fetch_assoc($result)):?>
                <div style="color:583672;background-color:#eed7ff;display: flex;border:solid thin #aaa;border-radius: 10px;margin-bottom: 10px;margin-top: 10px;padding:15px;">
                    <div style="flex:1;text-align: center;">
                       <?=$msg['name']?>
                    </div>
                    <div style="flex:3;">
                    <?=$msg['email']?>
                    </div>
                    <div style="flex:3;">
                    <?=$msg['message']?>
                    </div>
                        <div>
                            <div style="color:#888"><?=date("jS M, Y",strtotime($msg['date']))?></div>
            
                            <br><br>
                        </div>
                        <div>
                        <a href="viewmessage.php?action=deletemessage&id=<?= $msg['id']?>"  style="text-decoration: none;">
											<button class="submit" >Delete</button>
									</a>
                        </div>
                </div>
            <?php endwhile;?>
            <?php endif;?>



<div margin=30%></div>
</body>

</html>