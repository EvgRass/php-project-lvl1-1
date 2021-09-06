<?php

namespace Src\Gcd;

use function cli\line;
use function cli\prompt;

function main() {
  line('Welcome to the Brain Game!');
  $name = prompt('May I have your name?');
  line("Hello, {$name}!");
  line("Find the greatest common divisor of given numbers.");
  for ($i = 0; $i < 3; $i++) {
    $digit1 = rand(0, 100);
    $digit2 = rand(0, 100);
    $divisors1 = [];
    $divisors2 = [];
    for ($i = 1; $i <= $digit1; $i++) {
      if ($digit1 % $i == 0) {
        $divisors1[] = $i;
      }
    }
    for ($i = 1; $i <= $digit2; $i++) {
      if ($digit2 % $i == 0) {
        $divisors2[] = $i;
      }
    }
    $gcd = max(array_intersect($divisors1, $divisors2));
    line("Question: {$digit1} {$digit2}");
    $answer = prompt('Your answer');
    if ($answer == $gcd) {
      line('Correct!');
    } 
    // else {
    //   line("'{$answer}' is wrong answer ;(. Correct answer was '{$gcd}'.");
    //   line("Let's try again, {$name}!");
    //   return false;
    // }
  }
  line("Congratulations, {$name}!");
}