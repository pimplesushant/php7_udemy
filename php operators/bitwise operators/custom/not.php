<?php

$a = 10;
echo "decimal: " . $a . ", binary: " . decbin($a); 
echo "\n";

$x = bindec(decbin(~$a)); 
echo "decimal: " . $x . ", binary: " . decbin($x); 
echo "\n";

$x = ~$a; // same as $x = ~10;
echo "decimal: " . $x . ", binary: " . decbin($x); // Two's Complement
echo "\n";