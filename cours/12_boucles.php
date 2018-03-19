<?php

$famousPeople = [
    [
        'name' => 'Mark Zuckerberg',
        'job' => 'Entreprenneur',
    ], 
    [
        'name' => 'Bill Gates',
        'job' => 'Entreprenneur',
    ],
    [
        'name' => 'Shakira',
        'job' => 'Musicienne',
    ], 
    [
        'name' => 'Jul',
        'job' => 'Musicien ?',
    ],
];

$index = 0;
while (isset($famousPeople[$index])) {
    $index++;
}

foreach ($famousPeople as $people){
    
    foreach ($people as $key => $value) {
        print $key.': '.$value.PHP_EOL;
    }
}

// équivaut à for
for ($i = 0; $i < count($famousPeople); $i++) {
    $people = $famousPeople[$i];
    
    foreach ($people as $key => $value) {
        print $key.': '.$value.PHP_EOL;
        
        break 2;
    }
}

$index = 0;
do {
    var_dump($famousPeople[$index]);
    $index++;
} while (isset($famousPeople[$index]));
