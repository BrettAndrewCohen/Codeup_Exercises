<?php
  

    // GOAL: loop through hand and calculate total value
    // use "explode" function to separate card suit and value
    // aces count as 11 unless you are over 21 and then they count as 1
    // K, Q, and J count as 10
    // numeric cards count as their value
    // ??????May need to unset aces if the total is over 21 and it's looped towards the end??????

//End of night update: Have everything working except the aces. Right now they don't register at all after their value is 
//over 21. Example below will run the first two, but not the last 3. 
// ??????May need to unset aces if the total is over 21 and it's looped towards the end??????
// Check to make sure this all works in the virtual machine. 

// if the total is over 21 after a card is added to the deck when an ace already counts as 11 
// you need to reset that aces value to 1. 



$hand = array('A-H', '5-D', 'K-C', 'A-S', '4-H');

function getTotal($hand) {

    $total = 0;

    foreach ($hand as $cards) { 
  
            explode('-', $cards);

                if ($cards[0] == A && $total < 21) {
                    $cards = "11";
                    var_dump($cards);
                }
        
                elseif (($cards[0] == A) && ($toatal != 21)) {
                    $cards = "1";
                    var_dump($cards);
                }
         
                elseif ($cards[0] == J || $cards[0] == Q || $cards[0] == K) {
                    $cards = "10";
                    var_dump($cards);
                }
            
            $cards = (intval($cards));

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


