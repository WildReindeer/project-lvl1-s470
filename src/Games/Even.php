<?php
namespace BrainGames\Games\Even;

use function \cli\line;
use function \BrainGames\Cli\run;

function isEven(int $num)
{
    return $num % 2 === 0;
}

function correctAnswer($question)
{
    return isEven($question) ? 'yes' : 'no';
}

function genQuestion()
{
    return rand(1, 100);
}

function startGame()
{
    $game = line("Answer 'yes' if number even otherwise answer 'no'");
    $question = [];
    $answer = [];
    for ($i = 0; $i < 3; $i++) {
        $question[] = genQuestion();
        $answer[] = correctAnswer($question[$i]);
    }
    run($game, $question, $answer);
}
