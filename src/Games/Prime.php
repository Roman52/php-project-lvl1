<?php

namespace Brain\Games\Prime;

use function cli\line;
use function cli\prompt;
use function Brain\Engine\showErrorMessage;
use function Brain\Engine\sayHello;

function initPrime(): void
{
    $randomNum = rand(1, 10);
    $userName = sayHello();

    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    line("Question: $randomNum");

    $correctAnswer = (isPrime($randomNum)) ? 'yes' : 'no';
    $userAnswer = prompt('Your answer');

    if ($userAnswer !== $correctAnswer) {
        showErrorMessage($userAnswer, $userName, $correctAnswer);
        return;
    }

    line('Correct!');
    line("Congratulations, $userName!");
}

function isPrime($number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}
