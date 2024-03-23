<?php
/**
 * 魔王を倒す
 *
 * 入力：[魔法のHP] [与えられるダメージ] [魔王のHPが0にならなかった場合に魔王が回復してしまう回復値]
 * 倒せるかどうかの判定処理
 */

    $checkInput = function ($value, $type = 0) {
        if (is_numeric($value)
            && ($value > 0 || ($value >= 0 && $type == 1))
        ) {
            return true;
        }
        return false;
    };

    while (true) {
        echo 'Set Parameter(n n n): ';
        $arr = explode(" ", trim(fgets(STDIN)));
        if (count($arr) == 3)  {
            [$hp, $attack, $recovery] = $arr;
            if ($checkInput($hp) && $checkInput($attack) && $checkInput($recovery, 1)) break;
        }
        if (count($arr) == 1 && $arr[0] == "q") return false;
    }

    // 早期判定
    $msg = '';
    if ($attack <= $recovery) {
        echo '倒せません。';
        return false;
    }

    $sa = $attack - $recovery;

    $count = floor($hp / $sa);

    $amari = $hp % $sa;

    $calc = ($sa * $count) + $amari;

    if ($hp != $calc) {
        // echo "error";
    }

    $count = $count + ($amari > 0 ? 1 : 0);
    printf("%s回めで倒せた。\n", $count);
