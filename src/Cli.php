<?php
namespace BrainGames\Cli;

use function \cli\line;

function run()
{
    line('Welcome to the Brain Game!');
    $name = \cli\prompt('May i have your name?');
    line("Hello, %s", $name);
}