<?php

namespace Src\Progression;

use function cli\line;
use function cli\prompt;

function main()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    line('What number is missing in the progression?');
    for ($i = 0; $i < 3; $i++) {
        $lengthProgression = rand(5, 10);
        $positionMissing = rand(1, $lengthProgression);
        $firstNumder = rand(0, 100);
        $intervalProgression = rand(0, 10);
        $j = 1;
        echo 'Question: ';
        while ($j != $lengthProgression + 1) {
            if ($j == $positionMissing) {
                echo '..';
                $correctAnswer = $firstNumder;
            } else {
                echo $firstNumder;
            }
            echo ' ';
            $firstNumder += $intervalProgression;
            $j++;
        }
        echo PHP_EOL;
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return false;
        }
    }
    line("Congratulations, {$name}!");
}