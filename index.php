<?php
setcookie('fav_food', 'biryani', time()+1000, '/');
setcookie('fav_drink', 'coke', time()+1000, '/');
setcookie('fav_dessert', 'gulab jamun', time()+1000, '/');

// cookies can be viewed in devtools->application->cookies

foreach($_COOKIE as $key=>$value){
    echo "{$key} = {$value}<br>";
}
?>
