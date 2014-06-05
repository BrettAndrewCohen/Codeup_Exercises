<?php

// create poker game
// step 1 - build the deck of cards
// step 2 - create a winning hand formula.
// step 3 - pull 5 random cards out of the deck for each hand.
// step 4 - compare the hands and declare a winner. 

$deck = [
	'spade'   => [2,3,4,5,6,7,8,9,10,11,12,13,14],
	'club'    => [2,3,4,5,6,7,8,9,10,11,12,13,14],
	'diamond' => [2,3,4,5,6,7,8,9,10,11,12,13,14],
	'heart'   => [2,3,4,5,6,7,8,9,10,11,12,13,14]
	];


// $suit = array_rand($deck, 1);

foreach ($deck as $suit => $card) {
	echo $suit . PHP_EOL;
	foreach ($card as $key => $value) {
		echo $value . PHP_EOL;
	}
}


// echo $suit . PHP_EOL;


