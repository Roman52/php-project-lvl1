<?php

namespace Brain\Games\Calc;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Engine\errorMessage;
use function Brain\Games\Engine\sayHello;

function calc(): void
{
    $rounds = 3;
    $operations = ['-', '+', '*'];
    $correctAnswer = 0;

    $userName = sayHello();

    line('What is the result of the expression?');

    for ($i = 1; $i <= $rounds; $i += 1) {
        $operand1 = random_int(1, 10);
        $operand2 = random_int(1, 10);
        $operation = random_int(0, 2);

        line("Question: $operand1 $operations[$operation] $operand2");

        $userAnswer = (int) prompt('Your answer');

        switch ($operations[$operation]) {
            case '-':
                $correctAnswer = $operand1 - $operand2;
                break;
            case '+':
                $correctAnswer = $operand1 + $operand2;
                break;
            case '*':
                $correctAnswer = $operand1 * $operand2;
        }

        if ($userAnswer !== $correctAnswer) {
            errorMessage($userAnswer, $userName, $correctAnswer);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, $userName!");
}
