<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Login page</h3>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
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
// echo $_SERVER['PHP_SELF'],'<br>';
// echo $_SERVER["REQUEST_METHOD"];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Hi";
    }

    

    foreach($_SERVER as $key=>$value){
        echo "{$key} = {$value}<br>";
    }
?>
