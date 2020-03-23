<?php

$x = 1 == true; // same as (bool)1 == true
var_dump($x);

var_dump(true == "hello"); // "hello" is true because is not empty string "" and not "0"

var_dump(1 == 2);