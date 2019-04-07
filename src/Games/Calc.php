<?php
namespace BrainGames\Games\Calc;

use function BrainGames\Play\run;
use const BrainGames\Play\QUESTIONS_COUNT;

const DESCRIPTION_GAME = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function calculateAnswer($operand1, $operand2, $operator)
{
    switch ($operator) {
        case '+':
            return $operand1 + $operand2;
        case '-':
            return $operand1 - $operand2;
        case '*':
            return $operand1 * $operand2;
    }
}

function startGame()
{
    $questionsAndAnswers = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $operand1 = rand(1, 10);
        $operand2 = rand(1, 10);
        $operator = OPERATORS[array_rand(OPERATORS)];
        $question = "{$operand1} {$operator} {$operand2}";
        $answer = (string) calculateAnswer($operand1, $operand2, $operator);
        $questionsAndAnswers[$question] = $answer;
    }
    run(DESCRIPTION_GAME, $questionsAndAnswers);
}
