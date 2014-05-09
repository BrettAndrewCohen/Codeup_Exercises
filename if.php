<?php

// Change the values of $a, $b, and $c to test each conditional. Make sure you get expected results.

$a = 10;
$b = 20;
$c = '20';

// add an else clause to the next two statements

if ($a < $b) {
    // output the appropriate result
    echo "$a is less than $b\n";
}
    else {
        echo "$a is not less than $b\n";
    }

if ($b > $a) {
    // output the appropriate result
    echo "$b is greater than $a\n";
}
    else {
        echo "$b is less than $a\n";
    }

// Shorten the next 2 statements into an if/else
if ($b >= $c) {
    // output the appropriate result
    echo "$b is greater than or equal to $c\n";
}

else {
    // output the appropriate result
    echo "$b is not greater than or equal to $c\n";
}

// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b === $c) {
    // output the appropriate result
    echo "$b is identical to $c\n";
}

else if ($b == $c) {
    // output the appropriate result
    echo "$b is equal to $c\n";
}

else if ($b !== $c) {
    // output the appropriate result
    echo "$b is not identical to $c\n";
}

else {
    // output the appropriate result
    echo "nothing happens";
}

?>