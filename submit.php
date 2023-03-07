<?php
include "./include/db.php";
global $conn;
if(isset($_POST["signup"])){
    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];

    //$query = "INSERT INTO `users` (`username`, `firstname`, `lastname`, `password`) VALUES ('${username}', '${firstname}', '${lastname}', '${password}'";
    $query = "INSERT INTO users (username, firstname, lastname, password) VALUES ('${username}','${firstname}','${lastname}','${password}')";

    $execute = mysqli_query($conn,$query);
    echo "username = ${username}";

    
}
?>