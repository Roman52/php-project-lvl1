<?php

namespace Brain\Games\EvenCheck;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Functions\isEven;
use function Brain\Games\Functions\errorMessage;

function evenCheck(): void
{
    $rounds = 3;
    line('Welcome to the Brain Games!');
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 1; $i <= $rounds; $i += 1) {
        $randomNumber = random_int(1, 100);
        line("Question: $randomNumber");

        $userAnswer = prompt('Your answer');
        $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';

        if ($userAnswer !== $correctAnswer) {
            errorMessage($userAnswer, $userName, $correctAnswer);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, $userName!");
}
