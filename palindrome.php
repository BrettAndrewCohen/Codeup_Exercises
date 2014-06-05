<?php

$word = "No 'x' in 'Nixon";

function palindrome($str) {
	$string = $str;
	$string = preg_replace('/\s+/', '', $string);
	$string = preg_replace("/[^a-z0-9.]+/i", "", $string);
	$string = strtolower($string);
	$rstring = strrev($string);
	$rstring = preg_replace('/\s+/', '', $rstring);
	$rstring = preg_replace("/[^a-z0-9.]+/i", "", $rstring);
	$rstring = strtolower($rstring);
	if ($string == $rstring) {
		echo "true" . PHP_EOL;
	}

}

echo palindrome($word); 

//this is working for one word strings like 'alula'. Not for sentences. 

// Create the function so it will return a bool value true if the entered word is a palindrome. 
// Function name example could be is_palindrome(). After you are complete test several known palindromes.. 
// then test regular words in your function.

// Try the following known palindromes in your function

// Amore, Roma
// A man, a plan, a canal: Panama
// No 'x' in 'Nixon