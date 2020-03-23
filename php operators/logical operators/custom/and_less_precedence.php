<?php

var_dump(true and true);
var_dump(true and false); // false
var_dump(1 and 2); // true
var_dump(1 and 'ok'); // true
var_dump(4 > 3 and 3 < 4); // true
var_dump("" and die()); // immediately returns false, die() is not executed
var_dump(true and die("here!")); // checks second operand and dies.