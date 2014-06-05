<?php

// Create a file named foreach.php in you exercises directory. Commit each step and push to GitHub.

// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

// Construct a loop that iterates through each value and outputs only values with a type that is scalar.

// Create a loop that will echo out every value, including those nested in arrays. Output should look like this.


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach($things as $thing){
// 	echo "{$thing}" . PHP_EOL;
// }

// foreach($things as $thing) {
// 	if(is_scalar($thing)){
// 		echo "$thing" . PHP_EOL;
// 	}
// }

foreach ($things as $thing){
	if(is_int($thing)){
		echo "{$thing} is an Integer" . PHP_EOL;
	}
	elseif(is_float($thing)){
		echo "{$thing} is a Float" . PHP_EOL;
	}
	elseif(is_bool($thing)){
		echo "{$thing} is a Boolean" . PHP_EOL;
	}
	elseif(is_array($thing)){
		print_r ($thing);
	}
	elseif(is_null($thing)){
		echo "{$thing} is Null" . PHP_EOL;
	}
	elseif(is_string($thing)){
		echo "{$thing} is a String" . PHP_EOL;
	}
}

