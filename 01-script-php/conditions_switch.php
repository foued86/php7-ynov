<?php

$captainAge = 100;

switch ($captainAge) {
    case -1:
        print "Il est pas né.";
        break;
        
    case 18:
        print "Il peut juste boire de l'alcool.";
        break;
        
    case 100:
        print "IL EST PILE CENTENAIRE.";
        // sans break, on continue à évaluer
        // les cases qui sont en dessous
        // jusqu'à rencontrer un break
    case 101:
    case 102:
    case 103:
    case 104:
        print "Il est centenaires.";
        break;
    
    default:
        print "Il a ".$captainAge." ans.";
        break;
}
