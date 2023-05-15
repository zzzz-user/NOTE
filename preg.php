<?php
/**
 * preg_match — 正規表現によるマッチングを行う
 */
$value = func_001();

$pattern = $value['pattern'];
$sample = $value['sample'];

$result = preg_match($pattern, $sample, $matches);

var_dump(var_export($matches, true));
echo '結果 【' . ($result ? $matches[1] : 'nothing') . '】';

/**
 * 【002】一番最後の拡張子を抜き出す
 */
function func_002($str = 'test.jpg')
{
    return result('/\.([a-z]+)$/', $str);
}

/**
 * 【001】AB-〇〇〇〇-01
 * 固定文字または数字の中から数値を抜き出す
 */
function func_001($str = 'AB-500529-01')
{
    return result('/AB-(\d+)-\d/', $str);
}







function result($pattern, $sample)
{
    return [
            'pattern' => $pattern,
            'sample' => $sample,
        ];
}
