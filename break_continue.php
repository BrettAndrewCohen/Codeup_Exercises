<?php

// Create a file named break_continue.php in your exercises directory. 
// Commit and push to GitHub after each step.

// Create a for loop that shows all even numbers between 1 and 100 using continue.

// Create another for loop that counts from 1 to 100, but stops after 10 using break.

// The first example prints all numbers from 1 to 100 and and notes even numbers

for ($i = 1; $i <= 100; $i++) {
	echo $i . PHP_EOL;
	if ($i % 2 == 1) {
		continue;
	}
	echo "^The number above is even!" . PHP_EOL;
}

// The second example prints all even numbers

for ($i = 1; $i <= 100; $i++){
	if ($i % 2 == 1){
		continue;
	}
	echo $i . PHP_EOL;
}

// The last example prints all numbers from 1 to 10. 

for ($i = 1; $i <= 100; $i++) {
	echo $i . PHP_EOL;
	if ($i == 10) {
		break;
	}
}