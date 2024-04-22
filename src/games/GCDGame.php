<?php
use function cli\line;
use function cli\prompt;

line('Find the greatest common divisor of given numbers.');

$num1 = rand(1, 10);
$num2 = rand(1, 10);

line("Question: {$num1} {$num2}\n");
$answer = prompt('Your answer: ');

function greatestCommonDivisor()
{
    $gcd = gmp_gcd("$num1", "$num2");
    return $gcd;
}
function correction()
{
    global $answer, $name;
    if ($answer === greatestCommonDivisor()) {
        return 'Correct!';
        //return "'$answer' is wrong answer ;(. Correct answer was 'no'. Let's try again, $name!";
    }
    //return 'Correct!';
    return "'$answer' is wrong answer ;(. Correct answer was 'no'. Let's try again, $name!";
}

function congrats()
{
    $counter = 0;
    $i = 0;
    while ($counter < 3) {

        if ($correction() !== 'Correct!') {
            return null;
        } else {
            $counter++;
        }
        $i++;
    }
    return 'Congratulations, $name!';
}