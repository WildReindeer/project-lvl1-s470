<?php
namespace BrainGames\Games\Even;

use function \BrainGames\run;

const QUESTIONS_COUNT = 3;
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
