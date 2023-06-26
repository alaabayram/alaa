<?php

include("login_action.php");


session_start();

if (isset($_SESSION['logged_in'])) {
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/styles_login.css">
    <title>login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
<body>
    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="top_link"><a href="./signup.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return to Register form</a></div>
                <div class="contact">
                    <form action="login.php" method="post">
                        <h3>SIGN IN</h3>
                        <?php

                        if (isset($_POST['submit'])) {
                            if ($email !== 1) {
                                echo ("<div class='error' style='color:red !important;'>email invalid</div>");
                            }
                        }
                      
                        ?>
                        <input type="Email" placeholder="Email" name="email">
                        <input type="password" placeholder="Password" name="password">
                        <button class="submit" name="submit">Log in</button>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="right-text">
                </div>
                <div class="right-inductor"><img> </div>
                </div>
        </div>
    </section>
</body>

</html>