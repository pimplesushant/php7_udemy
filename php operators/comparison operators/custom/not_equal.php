<?php

var_dump(1 != true);
var_dump(true != "hello"); // "hello" is true because is not empty string "" and not "0"

var_dump((1 == 2) == false); // prints true
var_dump(1 != 2); // this is why != exists, to avoid long syntax above