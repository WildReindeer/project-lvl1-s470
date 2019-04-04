<?php
namespace BrainGames\Games\Calc;

use function \BrainGames\Cli\run;
use function \cli\line;

function calculateAnswer($operand1, $operand2, $operator)
{
    if ($operator === '+') {
        $answer = $operand1 + $operand2;
    } elseif ($operator === '-') {
        $answer = $operand1 - $operand2;
    } else {
        $answer = $operand1 * $operand2;
    }
    return (string) $answer;
}

function startGame()
{
    $game = 'What is the result of the expression?';
    $operators = ['+', '-', '*'];
    $questionsCount = 3;
    $questionsAndAnswers = [];
    for ($i = 0; $i < $questionsCount; $i++) {
        $operand1 = rand(1, 10);
        $operand2 = rand(1, 10);
        $selectOperator = rand(0, sizeof($operators) - 1);
        $operator = $operators[$selectOperator];
        $question = "{$operand1} {$operator} {$operand2}";
        $questionsAndAnswers[$question] = calculateAnswer($operand1, $operand2, $operator);
    }
    run($game, $questionsAndAnswers);
}
