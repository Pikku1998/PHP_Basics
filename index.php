<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>This is Login page.</h3>
    <a href="home.php">Home</a>
    <br>
</body>
</html>
<?php
    session_start();
    $_SESSION['user']='test';
    $_SESSION['pass']='hello';

    echo $_SESSION['user'],'<br>';
    echo $_SESSION['pass'],'<br>';
?>
