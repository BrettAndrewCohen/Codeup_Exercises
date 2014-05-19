<?php

// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

// first names

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// $result = array_search('Mike', $names);
// var_dump($result);

function check_name($name, $arrayname) {
	$result = array_search($name, $arrayname); 
		if ($result !== FALSE) {
			return TRUE;
		} else {
			return FALSE;
		}
}

echo check_name('Tina',$names) . PHP_EOL;
