<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <!-- <input type="radio" name="food" value='Biryani'>Biryani
        <br>
        <input type="radio" name="food" value='Burger'>Burger
        <br>
        <input type="submit" name='confirm' value="Confirm">
        <br>
        <br> -->
        <input type="checkbox" name="curry[]" value='Chicken'>Chicken
        <br>
        <input type="checkbox" name="curry[]" value='Fish'>Fish
        <br>
        <input type="submit" name='confirm'>



    </form>
</body>
</html>

<?php
    // if(isset($_POST['confirm'])){
    //     if(isset($_POST['food'])){
    //         $food = $_POST['food'];
    //         echo "You selected {$food}";
    //     }
    //     else{
    //         echo 'please make a selection.';
    //     };
    // };
    
    if(isset($_POST['confirm']))
    {
        if(isset($_POST['curry']))
        {
            $curries = $_POST['curry'];
            foreach($curries as $curry)
            {
                echo $curry,'<br>';
            }
        }
        else{
            echo 'Select something.';
        }

    };

    // foreach($curries as $curry){
    //     echo $curry;
    // }


?>
