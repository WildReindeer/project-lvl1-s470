<?php
namespace BrainGames\Games\Even;

use function \BrainGames\Cli\run;

function isEven(int $num)
{
    return $num % 2 === 0;
}

function startGame()
{
    $game = "Answer 'yes' if number even otherwise answer 'no'";
    $questionsCount = 3;
    $questionsAndAnswers = [];
    for ($i = 0; $i < $questionsCount; $i++) {
        $question = rand(1, 100);
        $questionsAndAnswers[$question] = isEven($question) ? 'yes' : 'no';
    }
    run($game, $questionsAndAnswers);
}
