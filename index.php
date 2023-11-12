<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Username: </label>
        <input type="text" name="username">
        <label>Password: </label>
        <input type="password" name="password">
        <br>
        <input type="submit" name='login' value="Log In">
    </form>
</body>
</html>

<?php
// isset() return TRUE if a variable is declared and not null.
// empty() returns True is a variable is not declared, false, null.

// foreach($_POST as $key=>$value){
//     echo "{$key} = {$value} <br>";
// }
$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_POST['login'])){
    if(empty($username)){
        echo 'No username';
    }
    elseif(empty($password)){
        echo 'No Password';
    }
    else{
        echo "Hi {$username}";
    };
};


?>
