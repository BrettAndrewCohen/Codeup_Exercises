<?php
// The application should run on command line, should prompt users to add new items,
// allow them to add text items, and the ability to remove completed items.

// After each action, it should display the TODO list and the menu.



// Test and verify the results before proceeding by creating a matching if block. 
// The output should be identical.

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

switch($day_of_week) {
    case 1:
        echo "Monday" . PHP_EOL;
        break;
    case 2:
        echo "Tuesday" . PHP_EOL;
        break;
    case 3:
    	echo "Wednesday" . PHP_EOL;
    	break;
    case 4:
        echo "Thursday" . PHP_EOL;
        break;
    case 5:
        echo "Friday" . PHP_EOL;
        break;
    case 6:
    	echo "Saturday" . PHP_EOL;
    	break;
    case 7:
    	echo "Sunday" . PHP_EOL;
    	break;
}

if ($day_of_week == 1) {
	echo "Monday";
}
elseif ($day_of_week == 2) {
	echo "Tuesday";
}
elseif ($day_of_week == 3) {
	echo "Wednesday";
}
elseif ($day_of_week == 4) {
	echo "Thursday";
}
elseif ($day_of_week == 5) {
	echo "Friday";
}
elseif ($day_of_week == 6) {
	echo "Saturday";
}
elseif ($day_of_week == 7) {
	echo "Sunday";
}
echo PHP_EOL;





