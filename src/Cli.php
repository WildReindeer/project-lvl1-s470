<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run($game, $question, $correctAnswer)
{
    line('Welcome to the Brain Game!');
    line("{$game}\n");
    $name = prompt('May i have your name?');
    line("Hello, %s!", $name);
    $numOfQuestion = 0;
    while ($numOfQuestion < 3) {
        $answer = prompt("Question: {$question[$numOfQuestion]}");
        if ($correctAnswer[$numOfQuestion] === $answer) {
            line("Your answer: {$answer}");
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer[$numOfQuestion]}'\n");
            exit("Let's try again,{$name}!\n");
        }
        $numOfQuestion += 1;
    }
    line("Congratulations,{$name}!");
}
