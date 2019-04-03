<?php
namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

function isEven(int $num)
{
    return $num % 2 === 0 ? true : false;
}

function isCorrectAnswer(string $str)
{
    return $str === "yes" || $str === "no" ? true : false;
}

function genQuestion(string $name)
{
    $question = rand(1, 100);
    $answer = prompt("Question: {$question}");
    $correctAnswer = isEven($question) ? 'yes' : 'no';
    $incorrectAnswer = isEven($question) ? 'no' : 'yes';
    if (isCorrectAnswer($answer) && $correctAnswer === $answer) {
        line('Correct!');
    } else {
        line("'{$incorrectAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'\n");
        exit("Let's try again,{$name}\n");
    }
}

function startGame()
{
    line('Welcome to the Brain Game!');
    line("Answer 'yes' if number even otherwise answer 'no' \n");
    $name = prompt('May i have your name?');
    line("Hello, %s \n", $name);
    $numOfQuestion = 3;
    while ($numOfQuestion > 0) {
        genQuestion($name);
        $numOfQuestion -= 1;
    }
    line("Congratulations,{$name}!");
}
