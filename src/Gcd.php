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
    for ($j = 1; $j <= $digit1; $j++) {
      if ($digit1 % $j == 0) {
        $divisors1[] = $j;
      }
    }
    for ($k = 1; $k <= $digit2; $k++) {
      if ($digit2 % $k == 0) {
        $divisors2[] = $k;
      }
    }
    $gcd = max(array_intersect($divisors1, $divisors2));
    line("Question: {$digit1} {$digit2}");
    $answer = prompt('Your answer');
    if ($answer == $gcd) {
      line('Correct!');
    } else {
      line("'{$answer}' is wrong answer ;(. Correct answer was '{$gcd}'.");
      line("Let's try again, {$name}!");
      return false;
    }
  }
  line("Congratulations, {$name}!");
}