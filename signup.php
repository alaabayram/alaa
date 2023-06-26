<?php

include("signup_action.php");
session_start();

if(isset($_SESSION['logged_in'])){
    header('location: home.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/styles_register.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
<body>
    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="top_link"><a href="./login.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return to login form</a></div>
                <div class="contact">
                    <form action="signup.php" method="post">
                        <h3>SIGN UP</h3>
                        <input type="text" placeholder="USERNAME" name="name">
                        <?php
                        if (isset($_POST['submit'])) {
                            if (empty($fullname)) {
                                echo "<p style='color:red;margin-bottom:0;font-size:15px'>Name is required</p>";
                            } elseif (strlen($fullname) > 15) {
                                echo "<p style='color:red;margin-bottom:0;font-size:15px'>Name is too long</p>";
                            } elseif (!preg_match('/^[a-zA-Z0-9_-]+$/', $fullname)) {
                                echo "<p style='color:red;margin-bottom:0;font-size:15px'>Name can only contain alphabets, numbers, underscores, dashes</p>";
                            }
                        }
                        ?>
                        <input type="email" placeholder="email" name="email">
                        <?php
                        if (isset($_POST['submit'])) {
                            if (empty($email)) {
                                echo "<p style='color:red;margin-bottom:0;font-size:15px'>Email is required</p>";
                            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                echo "<p style='color:red;margin-bottom:0;font-size:15px'>Email is not valid</p>";
                            } elseif ($rowCount > 0) {
                                echo "<p style='color:red;margin-bottom:0;font-size:15px'>Email is already registered</p>";
                            }
                        }
                        ?>
                        <input type="password" placeholder="password" name="password">
                        <?php
                        if (isset($_POST['submit'])) {
                            if (empty($password)) {
                                echo "<p style='color:red;margin-bottom:0;font-size:15px'>Password is required</p>";
                            } elseif (!preg_match('/^[a-zA-Z0-9_\-\p{P}]+$/', $password)) {
                                echo "<p style='color:red;margin-bottom:0;font-size:15px'>password can only contain alphabets, numbers, underscores, dashes and Symbols</p>";
                            }elseif(strlen($password)<5){
                                echo "<p style='color:red;margin-bottom:0;font-size:15px'>Password is too short</p>";
                            }
                        }
                        ?>
                        <input type="password" placeholder="repeat Password" name="Repeatpassword">
                        <?php
                        if (isset($_POST['submit'])) {
                            if (empty($repeatpassword)) {
                                echo "<p style='color:red;margin-bottom:0;font-size:15px'>R-Password is required</p>";
                            }elseif($password !== $repeatpassword){
                                echo "<p style='color:red;margin-bottom:0;font-size:15px'>Password do not match</p>";
                            }
                        }
                        ?>
                        <button class="submit" name="submit">Register now</button>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="right-text">
                    <h2></h2>
                    <h5></h5>
                </div>
                <div class="right-inductor"><img ></div>
                </div>
    </section>
</body>

</html>