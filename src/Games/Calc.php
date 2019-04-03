<?php
namespace BrainGames\Games\Calc;

use function \BrainGames\Cli\run;
use function \cli\line;

function genQuestion()
{
    $operatin = ['+', '-', '*'];
    $a = rand(1, 10);
    $b = rand(1, 10);
    return "{$a} {$operatin[rand(0, 2)]} {$b}";
}

function correctAnswer($question)
{
    $arr = explode(' ', $question);
    if ($arr[1] === '+') {
        $answer = (int)$arr[0] + (int)$arr[2];
    } elseif ($arr[1] === '-') {
        $answer = (int)$arr[0] - (int)$arr[2];
    } else {
        $answer = (int)$arr[0] * (int)$arr[2];
    }
    return (string) $answer;
}

function startGame()
{
    $game = line('What is the result of the expression?');
    $question = [];
    $answer = [];
    for ($i = 0; $i < 3; $i++) {
        $question[] = genQuestion();
        $answer[] = correctAnswer($question[$i]);
    }
    run($game, $question, $answer);
}
