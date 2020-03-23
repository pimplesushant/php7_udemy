<?php

//while (condition is true) {
//    code here will be executed;
//} 

$i = 1;
while ($i <= 10) echo $i++;

echo "\n";
$x = 'a';
while(strlen($x) < 10) { // will exit the loop when strlen($x) will be evaluated to 10, because 10 < 10 returns FALSE
    $x .= 'a';    
    echo $x;
    echo "\n";
}

$a = 10; $b = 1;
while ($a > $b && true) {
    $a--;
    $b++;
}

// avoid this. Will produce fatal error, something similar to this: 
// "Maximum execution time of 120 seconds exceeded" depending on `max_execution_time` settings in php.ini
$i = 10;
while ($i > 1) { // infinit loop, since $i will never be <= 1.
    $i++;
}