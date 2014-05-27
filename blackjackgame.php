<?php

$deck = ['2-H', '3-H', '4-H','5-H', '6-H', '7-H','8-H', '9-H', '10-H','J-H', 'Q-H', 'K-H','A-H',
         '2-D', '3-D', '4-D','5-D', '6-D', '7-D','8-D', '9-D', '10-D','J-D', 'Q-D', 'K-D','A-D',
         '2-S', '3-S', '4-S','5-S', '6-S', '7-S','8-S', '9-S', '10-S','J-S', 'Q-S', 'K-S','A-S',
         '2-C', '3-C', '4-C','5-C', '6-C', '7-C','8-C', '9-C', '10-C','J-C', 'Q-C', 'K-C','A-C'
        ];

$player = [];
$dealer = [];

while (count($player) < 2) {
    //pulls random card key from deck
    $cardkey = array_rand($deck);
    //assigns cardkey value to card
    $card = $deck[$cardkey];
    // echo $card . PHP_EOL;
    //removes the card(key) that was randomly pulled from the deck
    unset($deck[$cardkey]);
    //get the card in an array so we can use it like the $hand array below.**Not sure why I exploded?
    // $cardvalue = explode(" ", $card); 
    array_push($player, $card);
}

var_dump($player);
// var_dump($deck);

while (count($dealer) < 2) {
    //pulls random card key from deck
    $cardkey = array_rand($deck);
    //assigns cardkey value to card
    $card = $deck[$cardkey];
    // echo $card . PHP_EOL;
    //removes the card(key) that was randomly pulled from the deck
    unset($deck[$cardkey]);
    //get the card in an array so we can use it like the $hand array below. **WHY DID I EXPLODE HERE?**
    // $cardvalue = explode(" ", $card);
    array_push($dealer, $card);
}

var_dump($dealer);
// var_dump($deck);

// problem with putting this into a function is that I will need to change the array in the funtion(use reference &&&&)
// function pullcard($array){
//     $cardkey = array_rand($array);
//     $card = $array[$cardkey];
//     unset($array[$card]);
//     return $card . PHP_EOL;
// }

$hand = array('K-H', 'K-D','2-H','A-D');
// var_dump($hand);

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

function get_input($upper = false) {

    $result = trim(fgets(STDIN));
    return $upper ? strtoupper($result) : $result;

}
// var_dump(acecount($hand));

function getTotal($hand) {
    $total = 0;

    // Loop through the array and return the values. 
    foreach ($hand as $cards) {
        // Explode will return an array of strings. Pull the "card" from index 0 of the new arrays. 
        // Ben suggest that we assign $cards = explode('-', $cards);
       explode('-', $cards);
            if ($cards[0] == 'A') {
                $cards = "11";
            }elseif ($cards[0] == 'J' || $cards[0] == 'Q' || $cards[0] == 'K') {
                $cards = "10";
                // var_dump($cards);
            }
        //This is where the string becomes an integer. 
        $cards = (intval($cards));
        $total = $total + $cards;
   
    }

    $acecount = acecount($hand);
        while ($total > 21 && $acecount > 0) {
            $total -= 10;
            $acecount--;

        }

    return $total;
}

// Now I have the total of the player and dealer. 

$playertotal = getTotal($player);
$dealertotal =  getTotal($dealer);

echo "The dealer is showing $dealer[0]" . PHP_EOL;

// Show player their total value include numberic value and A, K, etc. 
do {

    echo "Your total is $playertotal! Would you like to (H)it or (S)tay" . PHP_EOL;
    $input = get_input(TRUE);
    if ($input == 'H') {
        //pulls random card key from deck
        $cardkey = array_rand($deck);
        //assigns cardkey value to card
        $card = $deck[$cardkey];
        // echo $card . PHP_EOL;
        //removes the card(key) that was randomly pulled from the deck
        unset($deck[$cardkey]);
        //get the card in an array so we can use it like the $hand array below.**Not sure why I exploded?
        // $cardvalue = explode(" ", $card); 
        array_push($player, $card);
        $playertotal = getTotal($player);
        if ($playertotal < 21) {
            continue;
        } else {
            echo "You bust. Game over!" . PHP_EOL;
            break(1);
        }
    }

} while($input != 'S');

while($dealertotal < 17) {
    
    //pulls random card key from deck
    $cardkey = array_rand($deck);
    //assigns cardkey value to card
    $card = $deck[$cardkey];
    // echo $card . PHP_EOL;
    //removes the card(key) that was randomly pulled from the deck
    unset($deck[$cardkey]);
    //get the card in an array so we can use it like the $hand array below. **WHY DID I EXPLODE HERE?**
    // $cardvalue = explode(" ", $card);
    array_push($dealer, $card);
    $dealertotal = getTotal($dealer);
    if($dealertotal < 21 && $dealertotal > 17) {
        echo "Dealer total is $dealertotal" . PHP_EOL;
        break;
    } else if($dealertotal > 21) {
        echo "Dealer bust!" . PHP_EOL;
        break;
    }

}
echo "The dealers total is $dealertotal and your total is $playertotal" . PHP_EOL;

// Show the player the dealers first card

// Let the player hit or stay. If they hit, add that cards value to their total. 
// If it's under 21, ask them again. If it's over, they lose. 
// If the player stays, show the dealers total. Automatically hit for under 17, or stay for over. 

// Compare totals and declare a winner. 

// echo "Player total is $playertotal!" . PHP_EOL;
// echo "Dealer total is $dealertotal!" . PHP_EOL;

if ($playertotal > $dealertotal && $playertotal < 21) {
    echo "Player wins!" . PHP_EOL;
} elseif ($dealertotal <= 21 && $dealertotal > $playertotal) {
    echo "Dealer wins!" . PHP_EOL;
} elseif ($dealertotal == $playertotal) {
    echo "Pushhhhhhhh!" . PHP_EOL;
}

// echo getTotal($hand);
// THINGS TO DO: If the player bust, the game is over and the dealer does nothing! 
//Why is dealer winning when their total? May have fixed this
