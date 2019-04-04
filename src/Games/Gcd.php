<?php
namespace BrainGames\Games\Gcd;

use function \BrainGames\Cli\run;

function calculateGreatestCommonDivisor($num1, $num2)
{
    if ($num1 < $num2) {
        return calculateGreatestCommonDivisor($num2, $num1);
    } elseif ($num1 % $num2 === 0) {
        return $num2;
    }
    for ($i = floor($num2 / 2); $i > 0; $i--) {
        if ($num1 % $i === 0 && $num2 % $i === 0) {
            return $i;
        }
    }
}

function startGame()
{
    $game = "Find the greatest common divisor of given numbers.";
    $questionsCount = 3;
    $questionsAndAnswers = [];
    for ($i = 0; $i < $questionsCount; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "{$num1} {$num2}";
        $questionsAndAnswers[$question] = (string) calculateGreatestCommonDivisor($num1, $num2);
    }
    run($game, $questionsAndAnswers);
}
