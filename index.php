<?php
function birthday($name, $age){
    echo "Happy Birthday {$name}<br>";
    echo "Happy Birthday to you<br>";
    echo "You are {$age} years old<br>";
    echo "<br>";
}
birthday('Prakash',25);
birthday('Eswar', 23);
birthday(54,54);


function hypotenuse(int $a,int $b){
    return sqrt($a**2 + $b**2);
}
echo hypotenuse(5,4),"<br>";


function is_even(int $number){
    if($number%2 == 0){
        return true;
    }
    return false;
}
echo is_even(3),"<br>";
echo is_even(4),"<br>";

?>