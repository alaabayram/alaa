<?php
include("db_config/connect.php");

$name = $_POST['name'];
$email = $_POST['email'];
$message=$_POST['message'];

$sql= " INSERT INTO contact (name,email,message,date) VALUES ('$name','$email','$message',Now())";

mysqli_query($con,$sql);

header('location:contact.php');

?>