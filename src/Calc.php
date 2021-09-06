<?php

namespace Src\Calc;

use function cli\line;
use function cli\prompt;

function main()
{
  $operations = ['*', '+', '-'];
  line('Welcome to the Brain Game!');
  $name = prompt('May I have your name?');
  line("Hello, {$name}!");
  line('What is the result of the expression?');
  for ($i = 0; $i < 3; $i++) {
    $numberOperation = rand(0, 2);
    $operation = $operations[$numberOperation];
    $digit1 = rand(0, 100);
    $digit2 = rand(0, 100);
    line("Question: {$digit1} {$operation} {$digit2}");
    $answer = prompt('Your answer');
    if ($operation === '+') {
      if ($answer == $digit1 + $digit2) {
        line('Correct!');
      } else {
        $correctAnswer = $digit1 + $digit2;
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$name}!");
        return false;
      }
    }
    if ($operation === '-') {
      if ($answer == $digit1 - $digit2) {
        line('Correct!');
      } else {
        $correctAnswer = $digit1 - $digit2;
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$name}!");
        return false;
      }
    }
    if ($operation === '*') {
      if ($answer == $digit1 * $digit2) {
        line('Correct!');
      } else {
        $correctAnswer = $digit1 * $digit2;
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$name}!");
        return false;
      }
    }
  }
  line("Congratulations, {$name}!");
}