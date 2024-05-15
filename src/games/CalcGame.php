<?php
use function cli\line;
use function cli\prompt;
//function question()
//{
    line('What is the result of the expression?');

    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    $sign = randSign();

    line("Question: {$num1} {$sign} {$num2}\n");
    $answer = prompt('Your answer: ');
//}
function randExpression()
{
    global $num1, $num2, $sign;

     $expression = match($sign) {
        '+' => $num1 + $num2,
        '-' => $num1 - $num2,
        '*' => $num1 * $num2,
        default => 'default',
    };
    return $expression;
}
function randSign()
{
    $signs = ['+', '-', '*'];
    $key = array_rand($signs);
    return $signs[$key];
}


function correction()
{
    global $answer, $name, $expression;
    if ($answer !== randExpression()) {
        return "'$answer' is wrong answer ;(. Correct answer was '$expression'. Let's try again, $name!";
    }
    return 'Correct!';
}
// функция не видит результат рандомного выражения

function congrats()
{
    $counter = 0;
    $i = 0;
    while ($counter < 3) {

        if (correction() !== 'Correct!') {
            return null;
        } else {
            $counter++;
        }
        $i++;
    }
    return 'Congratulations, $name!';
}