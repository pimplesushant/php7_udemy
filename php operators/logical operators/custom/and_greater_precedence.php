<?php

var_dump(true && true); // true
var_dump(true && false); // false
var_dump(1 && 2); // true
var_dump(1 && 'ok'); // true
var_dump(4 > 3 && 3 < 4); // true
var_dump("" && die()); // immediately returns false, die() is not executed
var_dump(true && die("here!")); // checks second operand and dies.