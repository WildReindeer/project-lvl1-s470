<?php
namespace BrainGames\Games\Prime;

use function BrainGames\Play\run;
use const BrainGames\Play\QUESTIONS_COUNT;

const DESCRIPTION_GAME = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";

function isPrime(int $num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i < floor($num / 2); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function startGame()
{
    $questionsAndAnswers = [];
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        $question = rand(1, 109);
        $answer = isPrime($question) ? 'yes' : 'no';
        $questionsAndAnswers[$question] = $answer;
    }
    run(DESCRIPTION_GAME, $questionsAndAnswers);
}
