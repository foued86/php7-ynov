<?php

require_once(__DIR__.'/array_rand.php');

function insultron() {
    $adjectives1 = arrayRand(require(__DIR__.'/../data/adjectives.php'));
    $adjectives2 = arrayRand(require(__DIR__.'/../data/adjectives.php'));
    $animal = arrayRand(require(__DIR__.'/../data/animals.php'));
    $emoji = arrayRand(require(__DIR__.'/../data/emojis.php'));

    return sprintf(
        "Tu es %s comme un %s %s ! %s\n",
        $adjectives1,
        $adjectives2,
        $animal,
        $emoji
    );
}
