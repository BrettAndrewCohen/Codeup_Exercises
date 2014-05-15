<?php

// Open the earlier exercise arithmetic.php for editing.

// Commit your changes for each step and push to GitHub.

// Refactor each function to return the result, removing the echo. DONE


function error_message($a, $b){
	if (!(is_numeric($a) && is_numeric($b))){
		return "ERROR: Both $a and $b must be numbers, YO!";
	} 
	return PHP_EOL;
}

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return error_message($a,$b);
    }
   echo PHP_EOL; 
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a - $b;
	} else {
		return error_message($a,$b);
	}
   echo PHP_EOL;
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		return $a * $b;
	} else {
		return error_message($a,$b);
	}
   echo PHP_EOL;
}

// Validate divide by 0 errors, return FALSE if divide by 0 is attempted.

function divide($a, $b) {
if (is_numeric($b) && $b == 0){
	return false;
} else {
    if (is_numeric($a) && is_numeric($b)) {
		return $a / $b;
	} else {
		return error_message($a,$b);
	}
}
	echo PHP_EOL;
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	} else {
		return error_message($a,$b);
	}
   echo PHP_EOL;
}

// echo add(10,2) . PHP_EOL;
// subtract(10,2);
// multiply(10,2);
echo divide(10,0) . PHP_EOL;
var_dump(divide(10,0));
// modulus(10,2);
// test(5,2);

