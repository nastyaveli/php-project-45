<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function greeting(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function askQuestion(string $question, string $question_data): void
{
    line($question);
    line("Question: $question_data");
}

// todo тут добавить еще 2 функции (для ввода ответа и вывода результата)