<?php
namespace BrainGames;

use function \cli\line;
use function \cli\prompt;

function run($descriptionGame, $questionsAndAnswers)
{
    line('Welcome to the Brain Game!');
    line("{$descriptionGame}\n");
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
