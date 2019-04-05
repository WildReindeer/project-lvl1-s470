<?php
namespace BrainGames\Games\Gcd;

use function \BrainGames\run;

const QUESTIONS_COUNT = 3;
const DESCRIPTION_GAME = 'Find the greatest common divisor of given numbers.';

function calculateGreatestCommonDivisor($num1, $num2)
{
    if ($num1 < $num2) {
        return calculateGreatestCommonDivisor($num2, $num1);
    }
    return $num1 % $num2 === 0 ? $num2 : calculateGreatestCommonDivisor($num2, $num1 % $num2);
}

function startGame()
{
    $questionsAndAnswers = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "{$num1} {$num2}";
        $answer = (string) calculateGreatestCommonDivisor($num1, $num2);
        $questionsAndAnswers[$question] = $answer;
    }
    run(DESCRIPTION_GAME, $questionsAndAnswers);
}
