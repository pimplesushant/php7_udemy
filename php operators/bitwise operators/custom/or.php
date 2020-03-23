<?php

$a = 8;
echo "decimal: " . $a . ", binary: " . decbin($a); 
echo "\n";

$b = 12;
echo "decimal: " . $b . ", binary: " . decbin($b); 
echo "\n";

$c = $a | $b; // same as $c = 8 | 12
echo "decimal: " . $c . ", binary: " . decbin($c); 
echo "\n";

echo "\n";
echo '1000' . "\n";
echo '|' . "\n";
echo '1100' . "\n";
echo '1100' . "\n";
echo "\n";
