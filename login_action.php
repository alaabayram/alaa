<?php

include("./db_config/connect.php");
if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $checkEmail = "SELECT * FROM users WHERE email = '$email' AND name IS NOT NULL";

    $checkEmail_result = mysqli_query($con, $checkEmail);

    $user = mysqli_fetch_assoc($checkEmail_result);

    if ($user) {

        if (password_verify($password, $user['password'])) {
            session_start();
            
            $_SESSION['name'] = $user['name'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['pos']=$user['position'];
            $_SESSION["logged_in"] = 'true';


            header("location:index.php");
            die();
        }

        elseif (!password_verify($password, $user['password'])) {
             echo ("<div class = 'error'>wrong password</div>");
        }
    }

    else {
         echo ("<div class = 'error'>account doesnt exist</div>");
    }
}
