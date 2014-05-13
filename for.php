<?php

// Create a file named for.php in your exercises repo. Commit and push all changes after each step. DONE

// Prompt user for a starting number and ending number, then display all the numbers from the starting to ending using a for loop. DONE

// Refactor to allow user to choose increment. (count by 1, 2, 10, ...) DONE

// Default increment to 1 if no input.

// Make sure you are only allowing users to pass in numbers. Give an error message is both passed arguments are not numeric.

fwrite(STDOUT, "Hi there! Please give me a starting number" . PHP_EOL);

$starting_number = trim(fgets(STDIN)); 

if (!is_numeric($starting_number)){
	echo "I need a number! Please try again";
	exit(1);
}

fwrite(STDOUT, "Now I need an ending number." . PHP_EOL);

$ending_number = trim(fgets(STDIN));

if (!is_numeric($ending_number)){
	echo "I need a number! Please try again";
	exit(1);
}

fwrite(STDOUT, "How should I increment this? (hint: count by 1, 2, 10, etc.) *This is optional" . PHP_EOL);

$increment = trim(fgets(STDIN));

if ($increment == 0){
	$increment = 1;
}

for($a = $staring_number; $a <= $ending_number; $a += $increment) {
	echo "$a" . PHP_EOL;
}
