<?php
    $password = 'Prakash';
    $hash = password_hash($password, PASSWORD_BCRYPT);

    echo $hash,"<br>";

    if(password_verify('Prakash', $hash)){
        echo 'Logged In.<br>';
    }
    else{
        echo 'Invalid';
    }
?>