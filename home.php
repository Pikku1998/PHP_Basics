<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>This is Home Page.</h2><br>
    <form action="home.php" method="post">
        <input type="submit" name='logout' value="logout">
    </form>
     <br>
</body>
</html>

<?php
    session_start();
    echo $_SESSION['user'],'<br>';
    echo $_SESSION['pass'],'<br>';

    // session variable are available in this page also.

    if(isset($_POST["logout"])){
        session_destroy();
        header('location: index.php');
    };
?>
