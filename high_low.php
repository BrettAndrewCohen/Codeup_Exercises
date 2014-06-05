<?php 

// High Low Game!

// Welcome to the world of game development!

// You are going to build a game using the CLI.

// The specs for the game are:
// - game picks a random number between 1 and 100.
// - prompts user to guess the number
// - if user's guess is less than the number, it outputs "HIGHER"
// - if user's guess is more than the number, it outputs "LOWER"
// - if a user guesses the number, the game should declare "GOOD GUESS!"

// Hints:
// - Using conditionals and loops here is important
// - Random numbers can be made with the internal rand() function
// - If user is right, tell them they won
// - While they are wrong, give them hints and keep asking
// - Use exit(0) to end the game
// - If you get stuck in game, ctrl-c will exit.

// Have the computer guess the random number

// Define winning number

// Ask the user to guess the number

// Get the number the user guessed 

// Check the number against the winning number - if it's wrong, echo too high or too low

// If it's correct, echo "GOOD GUESS!"

$winning_number = rand(0,100);

echo $winning_number;


