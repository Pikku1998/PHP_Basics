<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Login page</h3>
    <form action="index.php" method="post">
        <input type="text" name="user" placeholder="username">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        <input type="submit" name='login' value="Login">
        
    </form>
    <br>
</body>
</html>
<?php
    if(isset($_POST['login'])){
        if(!empty($_POST['user']) && !empty($_POST['password'])){
            session_start();
            $_SESSION['user']=$_POST['user'];
            $_SESSION['pass']=$_POST['password'];
            header('location: home.php');
        }
        else{
            echo 'Invalid username/password!!!';
        }
    }



?>
