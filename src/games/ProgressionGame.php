<?php
use function cli\line;
use function cli\prompt;

line('What number is missing in the progression?');

line("Question: arithmeticProgression()");
$answer = prompt('Your answer: ');

function arithmeticProgression()
{
    $start = rand(1, 10);
    $step = rand(1, 10);
    $amount = rand(5, 10);
    $end = $start + ($step * ($amount - 1));

    $arithmeticProgression = range($start, $end, $step);
    $keyRandElement = array_rand($arithmeticProgression, 1);
    $progression = [];
    foreach ($arithmeticProgression as $item) {
        $progression[] = $item;
    }

    $progression[$keyRandElement] = '..';
    return $progression;
}

function correction()
{
    global $answer, $arithmeticProgression, $keyRandElement,  $name;
    if ($answer === $arithmeticProgression[$keyRandElement]) {
        return 'Correct!';
        //return "'$answer' is wrong answer ;(. Correct answer was 'no'. Let's try again, $name!";
    }
    //return 'Correct!';
    return "'$answer' is wrong answer ;(. Correct answer was '$arithmeticProgression[$keyRandElement]'. Let's try again, $name!";
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