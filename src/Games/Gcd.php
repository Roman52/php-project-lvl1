<?php

namespace Brain\Games\Gcd;

use function cli\line;
use function cli\prompt;
use function Brain\Engine\showErrorMessage;
use function Brain\Engine\sayHello;

function calcGcd(): void
{
    $rounds = 3;
    $userName = sayHello();

    line('Find the greatest common divisor of given numbers.');

    for ($i = 0; $i < $rounds; $i++) {
        $num1 = random_int(1, 20);
        $num2 = random_int(1, 20);

        line("Question: $num1 $num2");

        $userAnswer = (int) prompt('Your answer');
        $correctAnswer = gmp_intval(gmp_gcd($num1, $num2));

        if ($userAnswer !== $correctAnswer) {
            showErrorMessage($userAnswer, $userName, $correctAnswer);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, $userName!");
}
