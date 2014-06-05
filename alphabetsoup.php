<?php

$name = 'This thing finally works';

function alphabet_soup($str) {
	$array = explode(" ", $str);
	foreach ($array as $words) {
		$string = $words;
		$stringParts = str_split($string);
		sort($stringParts);
		echo implode('', $stringParts) . " ";
	}
}

echo alphabet_soup($name) . PHP_EOL;


// Create a function alphabet_soup($str) that accepts a string and will return the string in alphabetical order. 
// E.g. "hello world" becomes "ehllo dlorw". 
// So make sure your function separates and alphabetizes each word separately.
