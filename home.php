<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>This is Home Page.</h2>
</body>
</html>
<?php
    session_start();

    echo $_SESSION['user'],'<br>';
    echo $_SESSION['pass'],'<br>';
    
    // session variable are available in this page also.
?>
