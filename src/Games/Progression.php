<?php

namespace Brain\Games\Progression;

use function cli\line;
use function cli\prompt;
use function Brain\Engine\showErrorMessage;
use function Brain\Engine\sayHello;

function initProgression(): void
{
    $rounds = 3;
    $userName = sayHello();

    line('What number is missing in the progression?');

    for ($i = 0; $i < $rounds; $i++) {
        $progressionLength = random_int(5, 10);
        $numbersStart = random_int(1, 100);
        $hiddenPos = random_int(0, $progressionLength - 1);
        $step = random_int(1, 10);
        $numbers = [];

        for ($j = 1; $j <= $progressionLength; $j++) {
            $numbersStart += $step;
            $numbers[] = $numbersStart;
        }

        $correctAnswer = $numbers[$hiddenPos];
        $numbers[$hiddenPos] = '..';
        $numbersString = implode(' ', $numbers);

        line("Question: $numbersString");
        $userAnswer = (int) prompt('Your answer');

        if ($userAnswer !== $correctAnswer) {
            showErrorMessage($userAnswer, $userName, $correctAnswer);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, $userName!");
}
