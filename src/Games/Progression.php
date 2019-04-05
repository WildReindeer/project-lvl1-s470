<?php
namespace BrainGames\Games\Progression;

use function BrainGames\run;

const QUESTIONS_COUNT = 3;
const DESCRIPTION_GAME = 'What number is missing in the progression?';
const PROGRESSION_SIZE = 10;

function createProgression()
{
    $beginProgression = rand(0, 100);
    $stepProgression = rand(1, 5);
    $progression = [];
    for ($i = 1; $i <= PROGRESSION_SIZE; $i++) {
        $progression[] = $beginProgression + $stepProgression * $i;
    }
    return $progression;
}

function startGame()
{
    $questionsAndAnswers = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $progression = createProgression();
        $positionHiddenElement = array_rand($progression);
        $hidenElement = $progression[$positionHiddenElement];
        $progression[$positionHiddenElement] = '..';
        $question = implode(' ', $progression);
        $answer = (string) $hidenElement;
        $questionsAndAnswers[$question] = $answer;
    }
    run(DESCRIPTION_GAME, $questionsAndAnswers);
}
