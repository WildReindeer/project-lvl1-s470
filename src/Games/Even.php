<?php
namespace BrainGames\Games\Even;

use function BrainGames\Play\run;
use const BrainGames\Play\QUESTIONS_COUNT;

const DESCRIPTION_GAME = "Answer 'yes' if number even otherwise answer 'no'";

function isEven(int $num)
{
    return $num % 2 === 0;
}

function startGame()
{
    $questionsAndAnswers = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        $questionsAndAnswers[$question] = $answer;
    }
    run(DESCRIPTION_GAME, $questionsAndAnswers);
}
