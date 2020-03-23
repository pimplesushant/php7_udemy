<?php

$a = 8;
echo "decimal: " . $a . ", binary: " . decbin($a); 
echo "\n";

$b = 12;
echo "decimal: " . $b . ", binary: " . decbin($b); 
echo "\n";

$x = $a ^ $b; // same as $x = 8 ^ 12
echo "decimal: " . $x . ", binary: " . decbin($x); 
echo "\n";

echo "\n";
echo '1000' . "\n";
echo '^' . "\n";
echo '1100' . "\n";
echo '0100' . "\n";
echo "\n";
