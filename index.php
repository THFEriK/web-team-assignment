<?php?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo</title>
    <link rel="stylesheet" href="#">
</head>
<body>
    <h1>Login</h1>
    <form action="" method="POST">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="psw" placeholder="Password">
        <input type="submit" value="Login"> 
        <input type="button" onclick="hideLogin()" value="Register">
    </form>
    <h1>Register</h1>
    <form action="inc/register.inc.php" method="POST">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="psw" placeholder="Password">
        <input type="submit" value="Regisztráció"> 
        <input type="button" onclick="showLogin()" value="Login">
    </form>
</body>
<script src="#"></script>
</html>
