<?php

namespace Brain\Games\Functions;

use function cli\line;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function errorMessage(string $userAnswer, string $userName, string $correctAnswer): void
{
    line("$userAnswer is wrong answer ;(. Correct answer was $correctAnswer.");
    line("Let's try again, $userName!");
}
