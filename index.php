<?php

$fruits =  "apple,pear,grapefruit,cherry";

// print_r(explode(",", $fruits));  // ['apple', 'pear', 'grapefruit', 'cherry']




print_r(explode(',', $fruits, 0));  // ['apple,pear,grapefruit,cherry']

echo "<br>";
print_r(explode(',', $fruits, -1));  // ['apple', 'pear', 'grapefruit']





echo "<br>";

$email = "user@example.com";
list($name,  $domain)  =  explode("@",  $email);
echo "Name:  $name,  Domain:  $domain";  // Name:  user,  Domain:  example.com

echo "<br>";

$string =  "1:23:456";
echo json_encode(explode(":",  $string));  // ["1","23","456"]
echo "<br>";
var_dump(strstr($string,  ":")); // string(7)  ":23:456"
echo "<br>";
var_dump(strstr($string,  ":",  true));  // string(1)  "1"
echo "<br>";

var_dump(substr("Boo",  1));  // string(2)  "oo"

echo "<br>";

$cake =  "cakeæøå";
var_dump(substr($cake,  0,  5));  // string(5)  "cake?"


echo "<br>";

var_dump(substr_replace("Boo",  "0",  1,  1));  // string(3)  "B0o"

echo "<br>";

var_dump(substr_Replace("Boo",  "ts",  strlen("Boo")));  // string(5)  "Boots"


$hi =  "Hello World!";
$bye =  "Goodbye  cruel World!";
echo "<br>";
var_dump(strpos($hi,  " "));  // int(5)
echo "<br>";
var_dump(strpos($bye,  " "));  // int(7)



echo "<br>";

$name = "John Doe";
$value = 1;

if ($value == 1 && $name == "John Doe") {
    echo "Hello, John!";
} else {
    echo "You are not John!";
}


echo "<br>";

$a = 1;
$b = 2;

if ($a == 1 || $b == 2) {
    echo "True";
} else {
    echo "False";
}
