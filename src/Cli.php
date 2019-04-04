<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run($game, $questionsAndAnswers)
{
    line('Welcome to the Brain Game!');
    line("{$game}\n");
    $name = prompt('May i have your name?');
    line("Hello, %s!", $name);
   
    foreach ($questionsAndAnswers as $question => $correctAnswer) {
        $answer = prompt("Question: {$question}");
        if ($correctAnswer === $answer) {
            line("Your answer: {$answer}");
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'\n");
            exit("Let's try again,{$name}!\n");
        }
    }
    line("Congratulations,{$name}!");
}
