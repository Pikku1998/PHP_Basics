<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="">UserId:</label>
        <input type="text" name='user'>
        
        <label for="">password:</label>
        <input type="password" name='password'>

        <input type="submit" value="Log In">
    </form>
    
</body>
</html>

<?php
    echo $_GET['user'],'<br>';
    echo $_GET['password'];

?>