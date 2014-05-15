<?php

// Commit your changes for each step and push to GitHub.

// Validate all the arguments, and display an error if the input is not numeric. DONE

// Validate divide by 0 errors, display error if attempts to divide by 0 are made.

// Make the error messages show the values of the arguments. DONE

// Refactor the error messages into their own function, have the other functions use it for error messaging.

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
        echo $a + $b;
    } else {
        echo "ERROR: Both $a and $b must be numbers. Yo!";
    }
   echo PHP_EOL; 
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a - $b;
	} else {
		echo "ERROR: Both $a and $b must be numbers. Yo!";
	}
   echo PHP_EOL;
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		echo $a * $b;
	} else {
		echo "ERROR: Both $a and $b must be numbers. Yo!";
	}
   echo PHP_EOL;
}

function divide($a, $b) {
if (is_numeric($b) && $b == 0){
	echo "You can't divide by zero, Yo!";
} else {
    if (is_numeric($a) && is_numeric($b)) {
		echo $a / $b;
	} else {
		echo "ERROR: Both $a and $b must be numbers. Yo!";
	}
}
	echo PHP_EOL;
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b;
	} else {
		echo "ERROR: Both $a and $b must be numbers. Yo!";
	}
   echo PHP_EOL;
}

// add(10,2);
// subtract(10,2);
// multiply(10,2);
divide(10,test);
// modulus(10,2);

