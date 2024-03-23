<?php
/**
 * 【Fizz Buzz】 = 言葉遊び = 数字を順番に言っていく
 * - 言うべき数字が「[3]の倍数」なら数字の代わりに「Fizz」と言う
 * - 言うべき数字が「[5]の倍数」なら数字の代わりに「Buzz」と言う
 * - 言うべき数字が「[3]の倍数」かつ「[5]の倍数」なら数字の代わりに「Fizz Buzz」と言う
 *
 * ほかにもルールがあるらしい
 */

// $ php .\FizzBuzz.php
while (true) {
    echo 'Please Number: ';
    $s = rtrim(fgets(STDIN));

    if ($s == "" || $s == "q") {
        break;
    }

    if (preg_match('/^[0-9]+$/', $s)) {
        $a = $s;

        if ($s % 3 === 0) {
            $a = "Fizz";
        }
        if ($s % 5 === 0) {
            $a = "Buzz";
        }

        if ($s % (3 * 5) === 0) {
            $a = "Fizz Buzz";
        }

        printf("Hey Say 「%s」!\n", $a);

    } else {
        printf("! Invalid request !\n");
    }
}
