<?php
include "connection.php";

if (isset($_POST['user']) &&  isset($_POST['psw'])){

    $user = $_POST['user'];
    $psw = $_POST['psw'];
    $hash = password_hash($psw, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(name, password) VALUES('$user','$hash')";

    $conn -> query($sql);

    header("Location: ../index.php/#");
}
else{
    header("Location: ../index.php/#");
}








?>