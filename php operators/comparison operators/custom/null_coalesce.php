<?php

// https://wiki.php.net/rfc/isset_ternary?s[]=null&s[]=coalesce


$result = $_GET['mykey'] ?? ""; // is completely safe and will not raise an E_NOTICE


// Fetches the request parameter user and results in 'nobody' if it doesn't exist
$username = $_GET['user'] ?? 'nobody';
// equivalent to: $username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
 
// Calls a hypothetical model-getting function, and uses the provided default if it fails
$model = Model::get($id) ?? $default_model;
// equivalent to: if (($model = Model::get($id)) === NULL) { $model = $default_model; }

// It can even be chained: 
$x = NULL;
$y = NULL;
$z = 3;
var_dump($x ?? $y ?? $z); // int(3)
