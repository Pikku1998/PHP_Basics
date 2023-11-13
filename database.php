<?php
    $host='localhost';
    $user = 'root';
    $pass = 'asdfgh@1';
    $db_name = 'php_db';

    try{
        $connection = mysqli_connect($host, $user, $pass, $db_name);
        echo 'Connection Status: Connected<br>';
    }
    catch(mysqli_sql_exception){
        echo 'Connection to database Failed<br>';
    }
?>