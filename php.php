<?php

// phpinfo();

// echo 'test';

check_001();
// check_002();
exit;



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
