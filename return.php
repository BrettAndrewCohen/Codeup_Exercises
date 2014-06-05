<?php

function check($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
		return true;
	} else {
		echo "Error!";
		return false;
	}
}

function add($a, $b) {
	if (check($a, $b)) {
		return $a + $b;
	}
}

echo add(1,1) . PHP_EOL;