<?php

$captainAge = 23;

// comparé que le résultat est similaire
if ($captainAge == "23") {
    // ce code est évalué parce que 23 est similaire à "23"
}

// comparer que le résultat est IDENTIQUE
if ($captainAge === "23") {
    // ce code n'est pas évalué parce que les types différent
}

// comparer qu'une valeur est différente
if ($captainAge != 24) {
    // cette condition est évaluée
}

// comparaison inférieur
if ($captainAge < 24) {}
if ($captainAge > 24) {}
if ($captainAge <= 24) {}
if ($captainAge >= 24) {}

// opérateur mathématiques
$sum = 12 + 45;
$diff = 12 - 45;
$multiplication = 12 * 45;
$division = 12 / 45;
//$division = 12 / 0; // warning DIVISION PAR ZERO
$exposant = 2 ** 3;
$modulo = 12 % 3;

// opérateur + affectation
$captainAge += 10; 
// récupère le contenu de $captainAge
// lui ajoute 10
// stocke le résultat dans $captainAge
$captainAge -= 10;
$captainAge *= 10; // tout les opérateurs mathématiques

$captainLabel = $captainAge;
$captainLabel .= " ans"; // 23 ans

// incrémentation / décrémentation
$captainAge++; // équivaut à $captainAge = $captainAge + 1;
$captainAge--; // équivaut à $captainAge = $captainAge - 1;
