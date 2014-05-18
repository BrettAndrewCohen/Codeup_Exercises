<?php

    // GOAL: loop through hand and calculate total value
    // use "explode" function to separate card suit and value
    // aces count as 11 unless you are over 21 and then they count as 1
    // K, Q, and J count as 10
    // numeric cards count as their value

$hand = array('A-H', '5-D', 'K-C', 'A-S', '4-H');

function getTotal($hand) {
    $total = 0;

    foreach ($hand as $cards) {
       explode('-', $cards);
       // now card's index value of 0 is equal to each cards value.. 
       // BUT ONLY THE FIRST NUMBER IF IT'S DOUBLE DIGIT? 
            if ($cards[0] == A && $total < 21) {
                $cards[0] = intval(11);
            }
            elseif ($cards[0] == A && $toatal > 21) {
                $cards[0] = intval(1);
            }
            elseif ($cards[0] == J) {
                 $cards[0] = intval(10);
            }
            elseif ($cards[0] == Q) {
                $cards[0] = intval(10);
            }
            elseif ($cards[0] == K) {
                $cards[0] = intval(10);
            }
        //This is where the string becomes an integer. 
        $cards = (intval($cards[0]));

        $total = $total + $cards;
        
    }

    return $total;
}

echo getTotal($hand) . PHP_EOL;

//What I get back when I explode the $hand array. Smaller arrays with strings

// array(2) {
//   [0]=>
//   string(1) "A"
//   [1]=>
//   string(1) "H"

//$cards is now equal to 
// string(3) "A-H"
// string(3) "5-D"
// string(3) "K-C"
// string(3) "A-S"
// string(3) "4-H"


