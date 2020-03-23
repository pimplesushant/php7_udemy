<?php

$a = 16;
echo "decimal: " . $a . ", binary: " . decbin($a); 
echo "\n";

$b = 2;

$x = $a >> $b; // same as $x = 16 >> 2
echo "decimal: " . $x . ", binary: " . decbin($x); 
echo "\n";

echo "\n";
echo '10000' . "\n";
echo '>>' . "\n";
echo '2' . "\n";
echo '00100' . "\n";
echo "\n";

