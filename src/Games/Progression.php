<?php
namespace BrainGames\Games\Progression;

use function BrainGames\Play\run;
use const BrainGames\Play\QUESTIONS_COUNT;

const DESCRIPTION_GAME = 'What number is missing in the progression?';
const SIZE = 10;

function createProgression()
{
    $start = rand(0, 100);
    $step = rand(1, 5);
    $progression = [];
    for ($i = 0; $i < SIZE; $i++) {
        $progression[] = $start + $step * $i;
    }
    return $progression;
}

function startGame()
{
    $questionsAndAnswers = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $progression = createProgression();
        $hiddenElementPosition = array_rand($progression);
        $answer = (string) $progression[$hiddenElementPosition];
        $progression[$hiddenElementPosition] = '..';
        $question = implode(' ', $progression);
        $questionsAndAnswers[$question] = $answer;
    }
    run(DESCRIPTION_GAME, $questionsAndAnswers);
}
