<?php
namespace BrainGames\Games\Progression;

use function BrainGames\Cli\run;

function createProgression($size)
{
    $beginProgression = rand(0, 100);
    $stepProgression = rand(1, 5);
    $progression = [$beginProgression];
    for ($i = 0; $i < $size; $i++) {
        $progression[] = $progression[$i] + $stepProgression;
    }
    return $progression;
}

function startGame()
{
    $game = 'What number is missing in the progression?';
    $progressionSize = 10;
    $questionsCount = 3;
    $questionsAndAnswers = [];
    for ($i = 0; $i < $questionsCount; $i++) {
        $positionHiddenElement = rand(0, $progressionSize - 1);
        $question = createProgression($progressionSize);
        $hidenElement = $question[$positionHiddenElement];
        $question[$positionHiddenElement] = '..';
        $questionsAndAnswers[implode(' ', $question)] = (string) $hidenElement;
    }
    run($game, $questionsAndAnswers);
}
