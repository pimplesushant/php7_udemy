<?php

$a = 1;
$b = 2;
$c = true;

if ($a && $b) {
    if ($c) {
        echo 'here!' . "\n";
    }
}

// same and more preferable in this particular case
if ($a && $b && $c) {    
    echo 'here!' . "\n";
}

//=================================================

if (true) {
    echo "Will get";
    echo " here" . "\n";
}

if (isset($a)) {
    echo "Will get here" . "\n";
}

$z = 0;
if ($z++) {
    echo "Will not get here";
}

//=================================================

$user = 'John';
$password = 'test123';

if ($user === 'John' && $password === 'test123') {
    echo 'Hey John!';
}

//=================================================

// roulette table

$number = 25; // outcome of the spin

$reds = [1,3,5,7,9,14,16,18,19,21,23,25,27,30,32,34,36];
$sixLine5 = range(25, 30);
$column1 = [1,4,7,10,13,16,19,22,25,28,31,34];

$isOddNumber = $number % 2;
$isBigNumber = $number >= 19;
$isRed = in_array($number, $reds);
$isColumn1 = in_array($number, $column1);

if ($isOddNumber && $isBigNumber && $isRed && $isColumn1) {
    echo 'This is #25!';
}