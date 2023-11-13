<?php
    include('database.php');

    $name = 'Eswar';
    $password = 'Eswar';
    $hash = password_hash($password, PASSWORD_BCRYPT);


    $query = "INSERT INTO users (name, password) VALUES ('$name', '$hash')";
    try{
        mysqli_query($connection, $query);
        echo 'User is registered<br>';
    }
    catch(mysqli_sql_exception){
        echo 'Could not register user.<br>';
    }

    mysqli_close($connection);

?>