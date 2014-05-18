<?php

    // GOAL: loop through hand and calculate total value
    // use "explode" function to separate card suit and value
    // aces count as 11 unless you are over 21 and then they count as 1
    // K, Q, and J count as 10
    // numeric cards count as their value
    // May need to unset aces if the total is over 21 and it's looped towards the end. 

$hand = array('5-H', '6-D', 'K-C', '2-S', '2-H');

function getTotal($hand) {
    $total = 0;

    // Loop through the array and return the values. 
    foreach ($hand as $cards) {
        // Explode will return an array of strings. Pull the "card" from index 0 of the new arrays. 
       explode('-', $cards);

            if ($cards[0] == A && $total <= 21) {
                $cards = 11;
            }
            elseif ($cards[0] == A && $toatal >= 21) {
                $cards = 1;
            }
            elseif ($cards[0] == J) {
                 $cards = "10";
            }
            elseif ($cards[0] == Q) {
                $cards = "10";
            }
            elseif ($cards[0] == K) {
                $cards = "10";
                var_dump($cards);

            }
        //This is where the string becomes an integer. 
        $cards = (intval($cards));
        var_dump($cards);
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


