<?php

namespace Brain\Games\EvenCheck;

use function cli\line;
use function cli\prompt;

function evenCheck()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    line('Question: 15');
    $answer = prompt('Your answer');
}
