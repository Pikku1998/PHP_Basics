<?php

//Arrays
$fruits = array("banana", "orange", "apple");

// $fruits[1] = "pineapple";
// echo count($fruits);
// array_push($fruits,"kiwi")
// array_pop($fruits);
// array_shift($fruits); //removes the first element.

$reversed = array_reverse($fruits);

foreach($fruits as $fruit){
	echo $fruit,"<br>";
};

foreach($reversed as $fruit){
    echo "{$fruit} <br>";
};



// Associative Arrays
$capitals = array("India" => "Delhi", "USA"=>"Washington", "Japan"=>"Tokyo");

 $capitals["China"] = "Beijing";
// array_pop($capitals);
// array_shift($capitals);

// $keys = array_keys($capitals);
// $values = array_values($capitals);
// $reversed = array_reverse($capitals);

foreach($capitals as $key=>$value){
	echo "{$key}={$value}<br>";
};
?>
