<?php

$deck = ['2-H', '3-H', '4-H','5-H', '6-H', '7-H','8-H', '9-H', '10-H','J-H', 'Q-H', 'K-H','A-H',
'2-D', '3-D', '4-D','5-D', '6-D', '7-D','8-D', '9-D', '10-D','J-D', 'Q-D', 'K-D','A-D',
'2-S', '3-S', '4-S','5-S', '6-S', '7-S','8-S', '9-S', '10-S','J-S', 'Q-S', 'K-S','A-S',
'2-C', '3-C', '4-C','5-C', '6-C', '7-C','8-C', '9-C', '10-C','J-C', 'Q-C', 'K-C','A-C'
];

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

$handsplayed = 0;
$win = 0;
$loss = 0;
$purse = 200;

do {

    if($handsplayed > 0) {
    echo "Do you want to view game stats? (Y)es or (N)o." . PHP_EOL;
    $statinput = get_input(TRUE);
        if ($statinput == 'Y') {
            echo "Total wins $win" . PHP_EOL;
            echo "Total losses $loss" . PHP_EOL;
            echo "Hands Played $handsplayed" . PHP_EOL;
        }
    }

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

    // var_dump($player);

    while (count($dealer) < 2) {

        $cardkey = array_rand($deck);
        $card = $deck[$cardkey];
        unset($deck[$cardkey]);
        array_push($dealer, $card);
    }



    // Now I have the total of the player and dealer. 
    $handsplayed++;
    $playertotal = getTotal($player);
    $dealertotal =  getTotal($dealer);

    echo "How much do you want to bet? Max $purse." . PHP_EOL;
    $bet = get_input(TRUE);
    while ($bet > $purse) {
        echo "How much do you want to bet? Max $purse." . PHP_EOL;
        $bet = get_input(TRUE);
    }

    echo "The dealer is showing $dealer[0]" . PHP_EOL;
    echo "Your cards are $player[0] and $player[1]" . PHP_EOL; 

    do {

        echo "Your total is $playertotal! Would you like to (H)it or (S)tay." . PHP_EOL;
        $input = get_input(TRUE);
        if ($input == 'H') {
            $cardkey = array_rand($deck);
            $card = $deck[$cardkey];
            echo "You pulled a $card" . PHP_EOL;
            unset($deck[$cardkey]);
            array_push($player, $card);
            $playertotal = getTotal($player);
            if ($playertotal <= 21) {
                continue;
            } elseif ($playertotal > 21 && $purse > 0) {
                $purse = $purse - $bet;
                $loss++;
                echo "Your total is $playertotal. You lose." . PHP_EOL;
                break;
            } elseif ($playertotal > 21 && $purse <= 0) {
                echo "Your total is $playertotal. You bust. Game over!" . PHP_EOL;
                break;
                // exit(1);
            }
        }

    } while($input != 'S');

    echo "The dealers cards are $dealer[0] and $dealer[1]" . PHP_EOL;
    // var_dump($dealer);

    while($dealertotal < 17 && $playertotal <=21) {

        $cardkey = array_rand($deck);
        $card = $deck[$cardkey];
        echo "The dealer pulled a $card" . PHP_EOL;
        unset($deck[$cardkey]);
        array_push($dealer, $card);
        $dealertotal = getTotal($dealer);
        if($dealertotal <= 21 && $dealertotal > 17) {
            echo "Dealer total is $dealertotal" . PHP_EOL;
            break;
        } else if($dealertotal > 21) {
            echo "Dealer bust!" . PHP_EOL;
            break;
        }

    }
    echo "The dealers total is $dealertotal and your total is $playertotal" . PHP_EOL;

    if ($playertotal > $dealertotal && $playertotal <= 21) {
        $purse = $purse + $bet;
        $win++;
        echo "Player wins! You now have $purse dollars." . PHP_EOL;
    } elseif ($dealertotal > 21 && $playertotal <= 21) {
        $purse = $purse + $bet;
        $win++;
        echo "Player wins! You now have $purse dollars." . PHP_EOL;
    } elseif ($dealertotal <= 21 && $dealertotal > $playertotal) {
        $purse = $purse - $bet;
        $loss++;
        echo "Dealer wins. You now have $purse dollars." . PHP_EOL;
    } elseif ($dealertotal == $playertotal) {
        echo "Pushhhhhhhh!" . PHP_EOL;
    }

    unset($player);
    unset($dealer);

} while ($purse > 0);

//need to reset deck after each hand....or put the cards that were pulled back into the deck. 

