<?php
namespace BrainGames\Games\Calc;

use function \BrainGames\run;

const QUESTIONS_COUNT = 3;
const DESCRIPTION_GAME = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function calculateAnswer($operand1, $operand2, $operator)
{
    if ($operator === '+') {
        return $operand1 + $operand2;
    } elseif ($operator === '-') {
        return $operand1 - $operand2;
    } else {
        return $operand1 * $operand2;
    }
}

function startGame()
{
    $questionsAndAnswers = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $operand1 = rand(1, 10);
        $operand2 = rand(1, 10);
        $selectOperator = array_rand(OPERATORS);
        $operator = OPERATORS[$selectOperator];
        $question = "{$operand1} {$operator} {$operand2}";
        $answer = (string) calculateAnswer($operand1, $operand2, $operator);
        $questionsAndAnswers[$question] = $answer;
    }
    run(DESCRIPTION_GAME, $questionsAndAnswers);
}
