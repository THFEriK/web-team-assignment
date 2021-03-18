<?php
session_start();
require_once "connection.php";

if (isset($_POST['user']) && isset($_POST['psw']))
{
    $user   = $_POST['user'];                   //Get username from index.php         
    $psw    = $_POST['psw'];                    //Get password from index.php  
    $result = $conn->query("SELECT name, password FROM users WHERE name = '$user'");

    while ($row = $result->fetch_assoc())       //Get user data from DB
    {
        $psw_hash         = $row['password'];   
    }

    if(password_verify($psw, $psw_hash))
    {
        $_SESSION["logged-in"] = true;   //Set session (logged-in)
        $_SESSION["user"]      = $user;  //Set session (user)
        header("Location: ../dashboard.php");
    }
    else header("Location: ../index.php");
}
else header("Location: ../index.php");