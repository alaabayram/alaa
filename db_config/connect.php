<?php
$host="localhost";
$db_user="root";
$pass="";
$db_name="finalproject";

try{
    $con= mysqli_connect($host,$db_user,$pass,$db_name);
    //echo("done");
}catch(Exception $e){
    //echo("Error:" . $e);
}
?>