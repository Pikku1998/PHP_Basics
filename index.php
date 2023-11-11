<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

        <label for="">Enter a number to count to: </label>
        <br>
        
        <input type="text" name='number'>
        <br>

        <input type="submit" value="Enter">
    </form>
    <br>
</body>
</html>


<?php
    $number = $_POST['number'];

    for($i=1; $i<=$number; $i++){
        echo $i,"<br>";
    }
?>