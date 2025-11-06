<?php

namespace Brain\Games\Prime;

use function cli\line;
use function cli\prompt;
use function Brain\Engine\showErrorMessage;
use function Brain\Engine\sayHello;

function initPrime(): void
{
    $randomNum = rand(1,100);
    $userName = sayHello();

    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    line("Question: $randomNum");

    $correctAnswer = isPrime($randomNum);
    $userAnswer = prompt('Your answer');

    if ($userAnswer !== $correctAnswer) {
        showErrorMessage($userAnswer, $userName, $correctAnswer);
        return;
    }

    line('Correct!');
    line("Congratulations, $userName!");
}

function isPrime($number) {
    if ($number < 2) {
        return 'no';
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return 'no';
        }
    }

    return 'yes';
}
