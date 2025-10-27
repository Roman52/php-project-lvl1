<?php

namespace Brain\Games\EvenCheck;

use function cli\line;
use function cli\prompt;
use function Brain\Engine\isEven;
use function Brain\Engine\showErrorMessage;
use function Brain\Engine\sayHello;

function evenCheck(): void
{
    $rounds = 3;
    $userName = sayHello();
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 1; $i <= $rounds; $i += 1) {
        $randomNumber = random_int(1, 100);
        line("Question: $randomNumber");

        $userAnswer = prompt('Your answer');
        $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';

        if ($userAnswer !== $correctAnswer) {
            showErrorMessage($userAnswer, $userName, $correctAnswer);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, $userName!");
}
