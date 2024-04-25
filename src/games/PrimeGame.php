<?php
use function cli\line;
use function cli\prompt;

line('Answer "yes" if given number is prime. Otherwise answer "no".');

line("Question: ");
$answer = prompt('Your answer: ');

function isPrime()
{
    $num = rand(1, 11);
    print_r($num);
    print_r("\n");
    $count = 0;
    $i = 1;
    while ($i <= $num) {
        if ($num % $i === 0) {
            $count++;
        }
        $i++;
    }
    if ($count > 2) {
        return 'no';
    }
    return 'yes';
}

function correction()
{
    global $answer, $name;
    if ($answer === isPrime() {
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