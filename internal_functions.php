<?php


$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function check_if_set($variable_name){
	if (isset($variable_name)){
		echo "SET";
	} elseif (empty($variable_name)) {
		echo "EMPTY";
	}
	echo PHP_EOL;
}

// TEST: If var $nothing is set, display '$nothing is SET'
// check_if_set($nothing);


// TEST: If var $nothing is empty, display '$nothing is EMPTY'
// check_if_set($nothing);

// TEST: If var $something is set, display '$something is SET'
// check_if_set($something);

// Serialize the array $array, and output the results
echo serialize($array);

// Unserialize the array $array, and output the results
unserialize($array);
print_r($array);



// Create the program to meet the criteria set by each comment.

// Test and verify the output is as expected.

// Update the 'is set' check on $something to see if it is 'empty'. What happens?

// Revert previous change.

// Before the first conditional, unset($nothing). What happens?

// Find php.net function reference for the following groups: arrays, math, and strings. 
// Familiarize yourself with the available options by reading the descriptions of each function in each list.