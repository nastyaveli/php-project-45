<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;
function evenGame(): void
{
    function parityCheck()
    {
        line('Answer "yes" if the number is even, otherwise answer "no".', "\n");
        line('Question: ');
        line(randomNumber());
    }

    function randomNumber()
    {
        $randNumber = rand();
        line($randNumber, "\n");
        line("Your answer:");

        $answer = prompt('Your answer:');

        if (isEven($randNumber) && $answer === 'yes') {
            return 'Correct!';
        }
        return "yes' is wrong answer ;(. Correct answer was 'no'. Let's try again, $name!";
    }

    function congrats()
    {
        $counter = 0;
        $i = 0;
        while ($counter < 3) {

            if (randNumber() !== 'Correct!') {
                return null;
            } else {
                $counter++;
            }
            $i++;
        }
        return 'Congratulations, $name!';
    }

}

function isEven($randNumber): bool
{
    return (bool)$randNumber % 2;
}


