<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="name"><br>
        <label>Age:</label><br>
        <input type="text" name="age"><br>
        <label>Email:</label><br>
        <input type="text" name="email"><br>
        <input type="submit" name='login' value="Login">
    </form>

</body>
</html>
<?php

// SANITIZE AND VALIDATE FILTERS

if(isset($_POST["login"])){

    //Sanitizing input ->  strips unwanted chars

    //$username = $_POST['name']; //if you enter a js script in input field it will be executed. Hence we user sanitized input
    // $username = filter_input(INPUT_POST,"name", FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    // $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
    // echo $username,'<br>';
    // echo $age,'<br>';
    // echo $email,'<br>';


    //Validating input -> returns empty string if input didn't pass validation test.
    
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    if(empty($age)){
        echo "Invalid<br>";
    }
    else{
        echo $age,'<br>';
    }

    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    if(empty($email)){
        echo "Invalid";
    }
    else{
        echo $email,'<br>';
    }


}

?>