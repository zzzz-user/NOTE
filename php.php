<?php

// phpinfo();

// echo 'test';

for ($i = 1; $i <= 30; $i++) {
    if (strpos($i, '3') !== false) {
        printf("%s!\n", $i);
    } else if ($i % 3 === 0) {
        printf("%s!\n", $i);
    } else {
        printf("%s\n", $i);
    }
}




// check_001();
// check_002();
exit;

foreach ($variable as $key => $value) {
    # code...
}





/**
 * 真 or 偽
 */
function check_001()
{
    $value = '';
    $value = false;
    $value = null;
    $value = [''];
    $value = [];

    var_dump($value);
    if ($value) {
        echo '  .. is () true';
    } else {
        echo '  .. is () false';
    }

    echo "\n";
    if (isset($value)) {
        echo '  .. is isset true';
    } else {
        echo '  .. is isset false';
    }

    echo "\n";
    if (empty($value)) {
        echo '  .. is empty true';
    } else {
        echo '  .. is empty false';
    }
}

/**
 * url分解
 */
function check_002()
{
    $url = 'http://www.example.com/hoge/';

    $parse_url_arr = parse_url ( $url );

    var_dump($parse_url_arr);
    echo '--> ' . $parse_url_arr['scheme'] . '//' . $parse_url_arr['host'];
}

function check_003()
{
}
