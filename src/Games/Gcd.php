<?php

namespace Brain\Games\Gcd;

use function cli\line;
use function cli\prompt;
use function Brain\Engine\showErrorMessage;
use function Brain\Engine\calcGcd;
use function Brain\Engine\sayHello;

function initGcd(): void
{
    $rounds = 3;
    $userName = sayHello();

    line('Find the greatest common divisor of given numbers.');

    for ($i = 0; $i < $rounds; $i++) {
        $num1 = random_int(1, 100);
        $num2 = random_int(1, 100);

        line("Question: $num1 $num2");

        $userAnswer = (int) prompt('Your answer');
        $correctAnswer = (int) calcGcd($num1, $num2);

        if ($userAnswer !== $correctAnswer) {
            showErrorMessage($userAnswer, $userName, $correctAnswer);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, $userName!");
}
