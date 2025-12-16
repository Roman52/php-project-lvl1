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

function showErrorMessage(string|int $userAnswer, string $userName, string|int $correctAnswer): void
{
    line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
    line("Let's try again, $userName!");
}

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function calcGcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}
