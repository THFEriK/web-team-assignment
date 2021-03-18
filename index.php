<?php?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <img src="https://i.imgur.com/w6odXGT.png">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="psw" placeholder="Password">
        <br>
        <input type="submit" id="button" value="Login"> 
        <input type="button" onclick="hideLogin()" id="button" value="Register">
    </form>
        
    <form action="" method="POST">
        <img src="https://i.imgur.com/CMcnWUl.png">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="psw" placeholder="Password">
        <br>
        <input type="submit" id="button" value="Register">
        <input type="button" onclick="showLogin()" id="button" value="Login">
    </form>
</body>
<script src="#"></script>
</html>
