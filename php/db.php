<?php 

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "oway";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if(!$conn){
    echo "e no gree connect oo".mysqli_connect_error();
}

function secure_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}