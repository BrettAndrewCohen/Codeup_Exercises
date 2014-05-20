<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);


// Using the $physicists_array and your new knowledge of pushing, popping, exploding, and imploding: DONE!

// array_pop($physicists_array);

// array_push($physicists_array, 'and Tony Stark');

// $famous_fake_physicists = implode(', ', $physicists_array);

// echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;


// Turn your solution into a function named humanized_list(). 
// You should be able to pass the $physicists_array as the only argument, 
// and your function will return the result.

function humanized_list($array, $alphabetical = FALSE) {
	if ($alphabetical) {
		sort($array);
	}
	//define last item in the array & capture
	$last = end($array);
	// pull the last item off (which is $last)
	array_pop($array);
	//add the word AND to $last
	$last = "and $last";
	// add the new $last value to the end of the array
	array_push($array, $last);
	//make the array a string
	$stringofarray = implode(', ', $array);

	return $stringofarray;

	// echo "Some of the most famous fictional theoretical physicists are {$stringofarray}." . PHP_EOL;

}

$famous_fake_physicists = humanized_list($physicists_array, trues);

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;


?>
