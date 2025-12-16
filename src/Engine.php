<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

function sayHello(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function showErrorMessage(string $userAnswer, string $userName, string $correctAnswer): void
{
    line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
    line("Let's try again, $userName!");
}

function calcGcd($a, $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}
