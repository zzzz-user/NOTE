# php

# version
php --version

# 拡張を確認
php -i | grep ext-fileinfo


# PHP + Laravel（blade） + Vue の書き出し
<p>@{{ blockTitle }}</p>


# 配列内の値を数値化
$int = array_map('intval', ["a", "2", "41"]);


# 数字のみを抜き出す
$_num = (int)preg_replace('/[^0-9]/', '', 'abc1-b3');


# 指定の文字が含まれる
$str = 'this is a pen.';  
if (strpos($str,'this') !== FALSE) {  
    // 含まれる  
} else {  
    // 含まれない  
}
※0位置に含まれる=falseとなってしまうため型比較


# 型出すやつ
$int = "1";
echo gettype($int);

# 配列と文字列のやつ
$s = implode('-', [1, 2, 4]);
var_dump($s);

$s = explode('/', '1番/2番/3番');
var_dump($s);


# 全角チルダを波ダッシュへ置換
$value = str_replace(hex2bin("E3809C"), hex2bin("EFBD9E"), $value);
    とり方： 
        echo bin2hex('～'); 
        echo bin2hex('〜');


# 出力
printf("in: %s\n", "string");
