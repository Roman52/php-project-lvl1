<?php

namespace Brain\Games\Prime;

use function cli\line;
use function cli\prompt;
use function Brain\Engine\showErrorMessage;
use function Brain\Engine\sayHello;
use function Brain\Engine\isPrime;

function initPrime(): void
{
    $rounds = 3;
    $userName = sayHello();

    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    for ($i = 0; $i < $rounds; $i++) {
        $randomNum = rand(1, 10);

        line("Question: $randomNum");

        $correctAnswer = (isPrime($randomNum)) ? 'yes' : 'no';
        $userAnswer = prompt('Your answer');

        if ($userAnswer !== $correctAnswer) {
            showErrorMessage($userAnswer, $userName, $correctAnswer);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, $userName!");
}
