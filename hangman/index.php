<?php

$word = ['d', 'o', 'o', 'r'];
$guesses = ['_', '_', '_', '_'];
$turns = 5;
$won = false;

while ($turns > 0) {
    echo join(' ', $guesses) . "\n";
    echo "$turns turns left.\n";

    $letter = trim(readline("Guess a letter: "));
    $guessedCorrect = false;

    for ($i=0; $i < count($word); $i++) {
        if ($word[$i] === $letter) {
            $guesses[$i] = $letter;
            $guessedCorrect = true;
        }
    }

    if ($guessedCorrect) {
        echo "Yeah, correct letter!\n";

        if (!in_array('_', $guesses)) {
            $won = true;
            $turns = 0;
        }
    } else {
        echo "Sorry, wrong letter!\n";
        $turns--;
    }
}

if ($won) {
    echo "Yeah, you won!\n";
} else {
    echo "Sorry, you lost!\n";
}