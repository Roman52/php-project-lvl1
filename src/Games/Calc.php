<?php

namespace Brain\Games\Calc;

use function cli\line;
use function cli\prompt;
use function Brain\Engine\showErrorMessage;
use function Brain\Engine\sayHello;

function calc(): void
{
    $rounds = 3;
    $operations = ['-', '+', '*'];

    $userName = sayHello();

    line('What is the result of the expression?');

    for ($i = 0; $i < $rounds; $i++) {
        $operand1 = random_int(1, 10);
        $operand2 = random_int(1, 10);
        $operation = $operations[array_rand($operations)];

        line("Question: $operand1 $operation $operand2");

        $userAnswer = (int) prompt('Your answer');

        $correctAnswer = match ($operation) {
            '-' => $operand1 - $operand2,
            '+' => $operand1 + $operand2,
            '*' => $operand1 * $operand2,
        };

        if ($userAnswer !== $correctAnswer) {
            showErrorMessage($userAnswer, $userName, $correctAnswer);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, $userName!");
}
