<?php
$username = "root";
$password = "6911";
$host = "localhost";
$database = "cinema";

$conn = mysqli_connect($host, $username, $password, $database);
if($conn -> connect_errno){
    echo "failed to connect". $mysqli -> connect_error;
    exit();
}
?>