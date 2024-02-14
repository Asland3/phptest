<?php

echo "<h1>is_array</h1>";
// Vriable a
$a = "Hello";
echo "a is " . is_array($a) . "<br>";

// Normal array
$b = array("red", "green", "blue");
echo "b is " . is_array($b) . "<br>";

$c = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "c is " . is_array($c) . "<br>";

$d = "red, green, blue";
echo "d is " . is_array($d) . "<br>";



echo "<br>";

echo "<h1>Count</h1>";

echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);


echo "<br>";

echo "<h1>Recursive count</h1>";


echo "<br>";

$cars = array(
    "Volvo" => array(
        "XC60",
        "XC90"
    ),
    "BMW" => array(
        "X3",
        "X5"
    ),
    "Toyota" => array(
        "Highlander"
    )
);

echo "Normal count: " . count($cars) . "<br>";
echo "Recursive count: " . count($cars, 1);


//Date function with parameter - longdate(time());
function longdate($timestamp)
{

    $text = "The date is ";

    return $text . date("l F jS Y", $timestamp);
}


echo "<br>";
echo longdate(time());

//Date function with no parameter
function longdate2()
{

    $text = "The date is ";

    return $text . date("l F jS Y", time());
}


echo "<br>";
echo longdate2();




//Calculate function with generic parameter
function calculate($a)
{
    return "the number is = " . $a * 2;
    // equals 6 
}

echo "<br>";
echo calculate(3);



