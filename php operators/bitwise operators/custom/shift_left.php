<?php

$a = 4;
echo "decimal: " . $a . ", binary: " . decbin($a); 
echo "\n";

$b = 2;

$x = $a << $b; // same as $x = 4 << 2
echo "decimal: " . $x . ", binary: " . decbin($x); 
echo "\n";

echo "\n";
echo '00100' . "\n";
echo '<<' . "\n";
echo '2' . "\n";
echo '10000' . "\n";
echo "\n";
