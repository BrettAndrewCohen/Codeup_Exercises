<?php

$hand = array('A-H', '2-D', 'K-C', '2-S', 'A-H');

function acecount($hand){
    $acecount = 0;
    foreach ($hand as $cards) {
        explode('-', $cards);
        if ($cards[0] == 'A') {
            $acecount++;
        }
    }
    return $acecount;
}

function getTotal($hand) {
    $total = 0;

    // Loop through the array and return the values. 
    foreach ($hand as $cards) {
        // Explode will return an array of strings. Pull the "card" from index 0 of the new arrays. 
        // Ben suggest that we assign $cards = explode('-', $cards);
       explode('-', $cards);
            if (($cards[0] == 'A') && ($total <= 21)) {
                $cards = "11";
                // var_dump($cards);
            }
            elseif (($cards[0] == 'A') && ($toatal != 21)) {
                $cards = "1";
                // var_dump($cards);
            }
            elseif ($cards[0] == 'J' || $cards[0] == 'Q' || $cards[0] == 'K') {
                $cards = "10";
                // var_dump($cards);
            }
        //This is where the string becomes an integer. 
        $cards = (intval($cards));
        $total = $total + $cards;
        $acecount = acecount($hand);
        while ($total > 21 && $acecount >0) {
            $total -= 10;
            $acecount--;

        }
   
    }

    return $total;
}

echo getTotal($hand) . PHP_EOL;

// What ben did... 


// $cardValue = getcardvalue($card[0]);
// if ($cardvalue == 11) {
//     $acecount++; 
// }
// $total += $cardValue

// while ($total > 21 && $acecount >0) {
//     $total -= 10;
//     $acecount--;

// }

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


