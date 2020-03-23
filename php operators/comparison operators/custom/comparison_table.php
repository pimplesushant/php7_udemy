<?php


var_dump(NULL < 'hello'); // NULL is converted to FALSE, 'hello' is converted to TRUE, FALSE < TRUE
var_dump(true < 'str'); // 'str' is converted to TRUE
var_dump(true <= 'str'); // 'str' is converted to TRUE
