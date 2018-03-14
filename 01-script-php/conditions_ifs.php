<?php

$captainAlive = true;

// équivaut à : if ($captainAlive) {
if ($captainAlive == true) {
    print "Il est en vie 😱\n";
} else {
    print "Il est mort 😱\n";
}

// point d'exclamation = "non logique"
// inversion d'un boolean true -> false, false -> true
if (!$captainAlive) {
    // équivaut à $captainAlive == false
    print "Il est pas en vie.";
}

// explicite, évite de faire une double négation
$captainDead = !$captainAlive;
if ($captainDead) {
    print "Il est mort.";
}

$captainAge = 23;
if ($captainAge < 18) {
    print "Le capitaine est mineur.\n";
} elseif ($captainAge < 30){
    print "Le capitaine est un jeune vieux.\n";
// si toutes mes conditions sont évaluées à false
} else {
    print "Le capitaine est vieux\n";
}

print "C'est la fin.";
