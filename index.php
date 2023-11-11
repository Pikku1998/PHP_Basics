<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

        <label for="">Price: Rs.130/-</label>
        <br>
        
        <label for="">Quantity</label>
        <input type="text" name='quantity'>
        <br>

        <input type="submit" value="Order">
    </form>
    
</body>
</html>

<?php
    $item = "Biryani";
    $price = 130;
    $quantity = $_POST['quantity'];
    $total = $quantity * $price;
    echo "You have ordered {$quantity} biryanies<br>";
    echo "Your total amount is Rs.{$total}/-";

?>