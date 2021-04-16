# php

# version
php --version

# 拡張を確認
php -i | grep ext-fileinfo

# 配列内の値を数値化
$int = array_map('intval', ["a", "2", "41"]);

# 型出すやつ
$int = "1";
echo gettype($int);

# 配列と文字列のやつ
$s = implode('-', [1, 2, 4]);
var_dump($s);

$s = explode('/', '1番/2番/3番');
var_dump($s);

