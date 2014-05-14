<?php

// 1)	create an array of fruits.
// a.	Write a loop that prints the fruits (use a for and for each loop). 
// b.	Create a file called fruit.php and push to github in the exercises folder
// 2)	Modify the fruit array so that you have fruit name => color (make this an associative array – use at least 3 fruites). 
// a.	Print out using a foreach loop – Apples are red. 

$fruits = ['orange', 'apple', 'banana'];

for($i = 0; $i < count($fruits); $i++){
	echo "{$fruits[$i]}" .PHP_EOL;
}

foreach ($fruits as $fruit) {
	echo $fruit . PHP_EOL;
}

$fruits = ['orange' => 'orange', 'red' => 'apple', 'yellow' => 'banana'];

foreach ($fruits as $color => $fruit){
	echo "The color of the $fruit is $color" . PHP_EOL;
}