<?php

include('./db_config/connect.php');

$error = [];

if (isset($_POST["submit"])) {


    $fullname = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeatpassword = $_POST["Repeatpassword"];

    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $checkEmail_result = mysqli_query($con, $checkEmail);
    $rowCount = mysqli_num_rows($checkEmail_result);
    if ($rowCount > 0) {
        $error["email"] = "Email is already in use";
    }

    elseif (empty($fullname) || empty($email) || empty($password) || empty($repeatpassword)) {
        array_push($error, "All fields are required");
    }

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($error, "Email is not valid");
    }

    elseif (strlen($password) < 8) {
        array_push($error, "Password too short");
    }

    elseif ($password !== $repeatpassword) {
        array_push($error, "Passwords do not match");
    }

    elseif (!preg_match('/^[a-zA-Z0-9_-]+$/', $fullname) || !preg_match('/^[a-zA-Z0-9_\-\p{P}]+$/', $password)) {
        array_push($error, "Invalid password or name");
    }

    elseif (strlen($fullname) > 15) {
        array_push($error, "Name must be less than 15 characters");
    } else {
        try {

            
            $password_hashed = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO users (name, email, password, date) VALUES ('$fullname','$email','$password_hashed', NOW())";
            $result = mysqli_query($con, $sql);
        } catch (\Exception $ex) {
            echo "Error exception: " . $ex;
        }
    }
}
