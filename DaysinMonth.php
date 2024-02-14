<?php

date_default_timezone_set('Europe/Copenhagen');

// Thirty days has September, April, June and November. All the rest have 31, except February which has 28
$daysInMonth = date("t");

if ($daysInMonth <= 31) {
    print "This month must be February, September, April, June or November";
} elseif ($daysInMonth == 28) {
    print "This month must be February";
} else {
    print "This month must be January, March, May, July, August, October or December";
}



$number = 1;

while ($number <= 12) {
    echo "The number is: $number <br>";
    $number++;
}
