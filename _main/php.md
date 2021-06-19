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


# 文字列抜き出し
'account' => substr($email. 0, strpos($email, "@")),


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


# 変数名の中身を変数で使う
    $str = 'test';
    $user->${"str"} = 'bbb';


-----------------------------------------
# debug, log
-----------------------------------------
$a = $aaa;
\Illuminate\Support\Facades\Log::info(var_export($a, true));

error_log(date('Y/d/m h:i:s').'['.str_pad(__LINE__, 4, '0', STR_PAD_LEFT).'] '.print_r($a, true).' ('.__FILE__.")\n", 3, "./tmp/_loglog.log");

\Log::info($e->getMessage());
log_info($log);
dump($log);
dd($log);

# 置換出力
printf("in: %s\n", "string");





======================================================================================================================
# Laravel
======================================================================================================================
# compose
composer --version
composer install
composer dump-autoload


# laravel dev run serve
php artisan serve


# artisan
php artisan cache:clear
php artisan route:clear
php artisan config:clear
php artisan view:clear

セットしたい場合は：cach


# migration
php artisan migrate
# 指定のマイグレートファイルを実行
php artisan migrate:refresh --step=1  --path=/database/migrations/2020_20_20_00001_create_table_tablename.php

# 指定のシーダーを実行
php artisan db:seed --class=SeederFileNameSeeder


# DB再構築
php artisan migrate:fresh --seed


# sqliteのファイルを作り直す
rm ./database/database.sqlite
touch ./database/database.sqlite


# make
php artisan make:controller Dir/Namae --invokable
php artisan make:model Namae
php artisan make:middleware EventIsValid

## テーブル追加のマイグレーションファイルを作成
php artisan make:migration create_namae_table

## カラム追加のマイグレーションファイルを作成
php artisan make:migration add_column_info_table


# テストファイルを作成
php artisan make:test Dir/NamaeTest --unit

# リクエストファイルを作成
php artisan make:request User/Sample/EditRequest


# テスト実行
php artisan test
php artisan test --group NamaeTest


# query
->toSql();


# リクエストにマージする: ミドルウェア差し込みとか
$request->merge(['test' => 'aaaaaaaaaaaaaaaa']);




======================================================================================================================
# curl
======================================================================================================================
# curl エラーを取得
$ch = $ch;
if(curl_exec($ch) === false) {
    echo '<p style="color:red;bg-color:yellow;">Curl error: ' . curl_error($ch).'</p>';
} else {
    echo '<p style="color:grey;">Operation completed without any errors</p>'; // エラーなしで完了
}

$error = curl_error($ch); // error
$errno = curl_errno($ch); // error_no

$httpcode = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
echo $httpcode.'/';






======================================================================================================================
# Error Note.
======================================================================================================================
## ClassNot：  Class 'EloquentFilter\ServiceProvider' not found  
## Symfony\Component\ErrorHandler\Error\FatalError Trait 'Spatie\MediaLibrary\InteractsWithMedia' not found
再読み込み的な
composer install
composer dump-autoload
php artisan




======================================================================================================================
# ECCUBE
======================================================================================================================
# log
dump($qb->getQuery()->getSQL());

