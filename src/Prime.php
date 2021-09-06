<?php

namespace Src\Prime;

use function cli\line;
use function cli\prompt;

function isPrime($num) {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function main()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $digit = rand(2, 50);
        line("Question: {$digit}");
        if (isPrime($digit)) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }
        $answer = prompt('Your answer');
        if (isPrime($digit) && $answer === $correctAnswer || !isPrime($digit) && $answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return false;
        }
        line("Congratulations, {$name}");
    }
}