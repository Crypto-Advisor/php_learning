<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber(){
  global $play_count, $correct_guesses, $guess_high, $guess_low;
  $play_count++;
  $num = rand(1, 10);
  echo "Enter a number guess: \n";
  $input = readline(">> ");
  $input = intval($input);

  echo "Round: $play_count\nMy Number: $num\nYour guess: $input\n";
  if($input === $num){
    $correct_guesses++;
  } else if($input < $num){
    $guess_low++;
  } else{
    $guess_high++;
  }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();

$percent_correct = $correct_guesses / $play_count;

echo "you got " . $percent_correct . "% correct";

if($guess_high > $guess_low){
  echo "When you guessed wrong, you tended to guess high.\n";
} else{
  echo "When you guessed wrong, you tended to guess low.\n";
}
