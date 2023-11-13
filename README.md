# My_PHP_Notes

-> Php runs on a server(mostly apache), not on the web browser.
-> PHP is server-side scripting language embedded in html in it's simplest form.
-> Php file can contain html,css,javascript.

->XAMPP server


-> php tag <?php __code goes here__ ?>
-> echo for printing.
-> // for single line comments and /* */ for multiline comments

Variables: A named containers for storing reusable data. (integers, strings, floats, boolean)
-> $name = "Prakash";
-> echo $name;

-> Arithmetic Operators (+ - * / ** %)
-> Increment and Decrement (++ -- +- -+)
-> Operator Precedence (), **, * / %, + -

-> $_GET and $_POST: special variables used to collect data from html forms.
--------------------

->$_GET:
--------
-> Data is appended to url.
-> Not secure.
-> char limit.
-> requests can be cached.
-> better for search page.

->$_POST:
---------
-> Data is packed inside the body of HTTP request.
-> More secure
-> No char limit.
-> Requests are not cached.
-> better for submitting credentials.


Math functions:
---------------
-> abs()
-> round()
-> floor()
-> ceil()
-> pow()
-> pi()
-> rand()

Conditional Statements:
-----------------------
if(condition){

}
elseif(condition){

}
else{

}

Logical Operators:
------------------
&& - AND
|| - OR
! - Negate

switch - case:
--------------
switch():
	case _1_:
	case _2_:
	default:
	

->date('l') -> current day
->date('M') -> current month
->date('Y') -> current year	


For loop:
---------
-> Repeat some code a certain number of times.


While loop:
-----------
-> Used to execute code infinitely or when we don't know when the execution ends.
Ex: Timer.

Arrays:
-------
-> Special type of variable which can hold more than one value.

$fruits = array('banana', 'orange', 'apple');

foreach($fruits as $fruit){
	echo $fruit;
}

$fruits[1] = 'pineapple';
echo count($fruits);
array_push($fruits,'kiwi');
array_pop($fruits);
array_shift($fruits); //removes the first element.

$reversed = array_reverse($fruits)


Associative Array:
------------------
-> An array made of key=>value pairs.

$capitals = array('India' => 'Delhi', 'USA'=>'Washington', 'Japan'='Tokyo');

foreach($capitals as $key=>$value){
	echo '{key}={pair}<br>';
}

$capital['China'] = 'Beijing';
array_pop($capitals);
array_shift($capitals);

$keys = array_keys($capitals);
$values = array_values($capitals);
$reversed = array_reverse($capitals);

Note: $_POST and $_GET variables are technically an Associative array.
-----


isset() and empty():
--------------------
-> isset() return TRUE if a variable is declared and not null.
-> empty() returns True is a variable is not declared, false, null.
<?php
$name = 'hello';
$number = null;
$email = '';

echo 'isset() values<br>';
echo isset($name),'<br>';   -->1
echo isset($number),'<br>'; -->
echo isset($email),'<br>';  -->1
echo isset($test);          -->

// echo '<br>';
echo 'empty() values<br>';
echo empty($name),'<br>';    -->
echo empty($number),'<br>';  -->1
echo empty($email),'<br>';   -->1
echo empty($test),'<br>';    -->1
?>


Radio buttons and checkboxes:
-----------------------------
-> give name element the same value for radio buttons to only able to select a single radio button.

-> You can return an array from $_POST when using checkboxes.


Functions:
----------
-> write some code, and reuse it any number of times.

function function_name(_arguments if any_){
	
	code goes here;

}
function_name(_parameters if any_);

String functions:
-----------------
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

SANITIZE AND VALIDATE FILTERS:
------------------------------
-> Sanitizing input filter ->  strips unwanted chars
-> Validating input filter -> returns empty string if input didn't pass validation test.


include() function:
-------------------
-> Copies the content of a file(php, html, text) and includes it in php file.
-> Sections of our website becomes reusable.
-> Changes need to be only made in one place.


setcookie() and $_COOKIE:
-------------------------
-> cookie = information about user stored in user's web browser.
-> They are used for targeted advertisements, browsing preferences and other non-sensitive data.
-> cookies can be viewed in devtools->application->cookies

$_SESSION:
----------
-> A session is a super global variable used to stor information of user which is used across multiple pages.
-> A user is assigned a session-id.
Ex: Login Credentials.


$_SERVER:
---------
-> A server is a special global variable that contains headers, paths and script locations.
-> The entries in this array are created by web server.
-> It shows nearly everything you need to know about current web environment.
-> $_SERVER['PHP_SELF']
-> $_SERVER['REQUEST_METHOD']

Password hashing:
-----------------
-> Hashing is the process of transforming sensitive data(such as passwords) into letters, numbers and/or symbols via mathematical process. It is similar to encryption.
-> Hides the original data from 3rd parties.
-> password_hash()
-> password_verify()

Connecting to Database:
-----------------------
-> MySQLi extension
-> PDO (PHP Data Object)

-> mysqli_connect(server, user, password, database)
-> mysqli_query(connection, sql_query)
-> mysqli_num_rows(query_result) // gives number of rows the query fetched.
-> mysqli_fetch_assoc(query_result) // fetches each row from the result.

