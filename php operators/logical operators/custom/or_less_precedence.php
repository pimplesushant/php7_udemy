<?php

var_dump(true or false); // true
var_dump(1 or 2); // true
var_dump(1 or 'ok'); // true
var_dump(4 > 3 or 3 < 4); // true
var_dump(true or die()); // immediately returns true, die() is not executed
var_dump("" or die("here!")); // checks second operand and dies (because !true === false)

