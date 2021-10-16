<?php

// phpinfo();

// echo 'test';



// echo "\n";
$a = null;
$a = ",";
if (empty($a)) {
    echo 'ok';
}
echo "\n";
$a = "";

$s = explode(',', $a);
$s = array_filter($s);


var_dump($s);
var_dump(count($s));
