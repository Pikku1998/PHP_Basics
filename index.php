<?php
$name = 'Prakash R';
$number = '123-456-7890';

echo strtolower($name),'<br>';
echo strtoupper($name),'<br>';
echo strrev($name),'<br>';
echo str_shuffle($name),'<br>';
echo str_pad($name,20,'-'),'<br>';
echo str_replace('-','',$number),'<br>';
echo strcmp($name, 'Eswar'),'<br>';  // returns 1 if false
echo strcmp($name, 'Prakash R'),'<br>';  // returns 0 if true
echo strlen($number),'<br>';
echo strpos($number, '-'),'<br>';
echo substr($name,3,4,),'<br>'; // (string, start_position, length)

$number_bits = explode('-',$number); // (seperator,string) splits string into array
foreach($number_bits as $bit){
    echo $bit.'<br>';
}

$name = array("Amma","Prakash", "Eswar");
echo implode(" ",$name);

?>