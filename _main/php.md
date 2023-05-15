# php

# chmod 777 .

# version
php --version

# 拡張を確認
php -i | grep ext-fileinfo


# 確認用
routes\web.php
dd(app());


# PHP + Laravel（blade） + Vue の書き出し
<p>@{{ blockTitle }}</p>


# 配列内の値を数値化
$int = array_map('intval', ["a", "2", "41"]);


# 数字のみを抜き出す
$_num = (int)preg_replace('/[^0-9]/', '', 'abc1-b3');


# 文字列抜き出し
'account' => substr($email. 0, strpos($email, "@")),

# 文字列生成
echo substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz_'), 0, 8);



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
# 配列を文字列にする
$s = implode('-', [1, 2, 4]);
var_dump($s);

# 文字列を配列にする
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




# ファイルを保存　？？？
$data =  base64_decode([文字列]);
$type = finfo_buffer(finfo_open(), $data, FILEINFO_EXTENSION);
var_dump($type); // string(17) "jpeg/jpg/jpe/jfif"




-----------------------------------------
# debug, log
-----------------------------------------
logger('=======================');
$a = $aaa;
\Illuminate\Support\Facades\Log::info(var_export($a, true));
\Log::debug(__CLASS__.':'.__FUNCTION__.'---->');
\Log::debug(var_export($a, true));


# carbon date
error_log(date('Y/m/d H:i:s').'['.str_pad(__LINE__, 4, '0', STR_PAD_LEFT).'] '.print_r($a, true).' ('.__FILE__.")\n", 3, "./tmp/_loglog.log");

\Log::info($e->getMessage());
log_info($log);
dump($log);
dd($log);

# 置換出力
printf("in: %s\n", "string");



# 権限変更
chmod 755 file
chmod -R 755 dir




======================================================================================================================
# Laravel
======================================================================================================================
## 展開されたLaravelのバージョン確認
php artisan --version


# compose
composer --version
composer install
composer dump-autoload



# compose laravel migre
指定入れないと最新が入る
composer require doctrine/dbal
composer require "doctrine/dbal:2.*"



# laravel dev run serve
php artisan serve


# artisan
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear

php artisan clear-compiled

セットしたい場合は：cach

## ルート確認
php artisan routes

# 一時的なURLを発行、URL解体
        // アクセス署名付きURLを発行
        $tmpURL =  URL::temporarySignedRoute('ルートの名前', 制限時間（now()->addMinutes(30)）, ['key' => 123]);
\Log::debug(var_export($tmpURL, true));
\Log::debug(var_export(parse_url($tmpURL), true));
        // Laravel返却のパラメータを抜き出し
        $parse_url = parse_url($tmpURL);
\Log::debug(var_export($parse_url, true));
        parse_str($parse_url['query'], $output);
\Log::debug(var_export($output, true));





# migration
php artisan migrate

# マイグレ確認
php artisan migrate:status

# マイグレいっこ戻す
php artisan migrate:rollback --step=1

# マイグレにこ戻す
php artisan migrate:rollback --step=2


# マイグレやり直しとSeederも実行する
php artisan migrate:fresh --seed


# 指定のマイグレートファイルを実行
php artisan migrate:refresh --step=1  --path=/database/migrations/2020_20_20_00001_create_table_tablename.php


# 指定のマイグレーションファイルを戻す？
php artisan migrate:rollback --step=1  --path=/database/migrations/2020_01_01_000000_add_table.php


# 指定のシーダーを実行
composer dump-autoload
php artisan db:seed --class=SeederFileNameSeeder


# DB再構築
php artisan migrate:fresh --seed


# sqliteのファイルを作り直す
rm ./database/database.sqlite
touch ./database/database.sqlite


# make
php artisan make:controller Dir/Namae --invokable


# モデルつくる。-mはマイグレも一緒に作成
php artisan make:model Namae
php artisan make:model Users -m


# ミドルウェア
php artisan make:middleware AAAAA

## テーブル追加のマイグレーションファイルを作成
php artisan make:migration create_namae_table

## カラム追加のマイグレーションファイルを作成
php artisan make:migration add_[columnName]_to_[tableName]

## カラム削除のマイグレーションファイルを作成
php artisan make:migration drop_table_name

# 変更
php artisan make:migration alter_[columnName]_to_[tableName]



# テストファイルを作成
php artisan make:test Dir/NamaeTest --unit

# リクエストファイルを作成
php artisan make:request User/Sample/EditRequest


# コマンドファイルつくる
docker-compose exec php php artisan make:command Dir/CommandStart
...スラ注意

# テスト実行
php artisan test
php artisan test --group NamaeTest

# テストを書く
クラスの名前は後ろにTest
メソッドの名前は前にtest
        $this->markTestIncomplete(
          'このテストは、まだ実装されていません。'
        );


# query
->toSql();


# リクエストにマージする: ミドルウェア差し込みとか
$request->merge(['test' => 'aaaaaaaaaaaaaaaa']);

## ログ出力
Log::debug('ログ！');



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






# mail(古い)未確認
class IdentityVerifyRequestMail extends Mailable
{
        return $this->subject($subject)->view($view)->with($data)
            // ヘッダー追加したい場合
            // ->withSwiftMessage(function ($message) {
            // $message->getHeaders()
            //         ->addTextHeader('Custom-Header', 'HeaderValue');
            // })
            ;


======================================================================================================================
======================================================================================================================
# db接続に必要なドライバーは入っているか
php -m | grep pdo
pdo_sqlite ＝＞SQLite用





======================================================================================================================
# Error Note.
======================================================================================================================
## ClassNot：  Class 'EloquentFilter\ServiceProvider' not found  
## Symfony\Component\ErrorHandler\Error\FatalError Trait 'Spatie\MediaLibrary\InteractsWithMedia' not found
再読み込み的な
composer install
composer dump-autoload
php artisan



# マイグレのエラー
## Illuminate\Database\QueryException  : SQLSTATE[42000]: Syntax error or access violation: 1101 BLOB, TEXT, GEOMETRY or JSON column 'options' can't have a default
## value (SQL: alter table `uchinoko` add `options` json null default '')
- 間違い
    $table->json('options')->default("");
    $table->json('options')->default("")->nullable();
- 正解
    $table->json('options')->nullable();
### TEXT型も同じ。






# laravel
[2022-05-23 10:42:01] local.ERROR: Uncaught ReflectionException: Class App\Policies\ModelPolicy does not exist in Command line code:1
Stack trace:
#0 Command line code(1): ReflectionClass->__construct()
#1 [internal function]: {closure}()
#2 Command line code(1): array_map()
#3 {main}
  thrown {"exception":"[object] (Symfony\\Component\\Debug\\Exception\\FatalErrorException(code: 1): Uncaught ReflectionException: Class App\\Policies\\ModelPolicy does not exist in Command line code:1
Stack trace:
#0 Command line code(1): ReflectionClass->__construct()
#1 [internal function]: {closure}()
#2 Command line code(1): array_map()
#3 {main}
  thrown at Command line code:1)
[stacktrace]
#0 {main}
"} 
参考：https://github.com/amir9480/vscode-laravel-extra-intellisense/issues/31
＞二つめ
対応：app\Providers\AuthServiceProvider.php
コメントアウトする



# Bugsnug
## web接続でエラー発生させるコード
```
Route::get('/test', 'TestBugsnug');
```
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use RuntimeException;

class TestBugsnug extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        Bugsnag::notifyException(new RuntimeException("Test error"));
        return 'Hello World!!!';
    }
}
```



# php test ファクトリが見つからない
InvalidArgumentException: Unable to locate factory with name [default] [App\Models\User].
     * @before
     がある
または
public static function setUpBeforeClass(): void
{
    // テスト全体の前処理
}
setUpBeforeClass() が実行されるタイミングでは factory は使えない。（そもそもデータの状態が他のテストケースに依存しないようにした方が良い）



# error
## 422
### Failed to load resource: the server responded with a status of 422 (Unprocessable Entity)
たぶん、リクエストのバリデエラー。
値型がおかしいとかみてみる




# InvalidArgumentException: Unable to locate factory with name [default] [App\Models\xxxxxx].
test実行しようとしてエラー
use Tests\TestCase;
していない。コマンドで生成されたファイルだと別の（use PHPUnit\Framework\TestCase;）が入っているので書き換えること





# ルーティングエラー
処理そのものは停止せず、エラーログに吐き出される
local.ERROR: 
#0 /var/www/vendor/laravel/framework/src/Illuminate/Routing/Router.php(635): Illuminate\Routing\RouteCollection->match(Object(Illuminate\Http\Request))
#1 /var/www/vendor/laravel/framework/src/Illuminate/Routing/Router.php(624): Illuminate\Routing\Router->findRoute(Object(Illuminate\Http\Request))
#2 /var/www/vendor/laravel/framework/src/Illuminate/Routing/Router.php(613): Illuminate\Routing\Router->dispatchToRoute(Object(Illuminate\Http\Request))
#3 /var/www/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(170): Illuminate\Routing\Router->dispatch(Object(Illuminate\Http\Request))
..
..
..
composer とか npm のアップデートをする。
なんか追加されてたりするため




# ポートが見つからないと出るGuzzleHttp
local.ERROR: GuzzleHttp\Exception\ConnectException: cURL error 7: Failed to connect to localhost port 11080: Connection refused (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) in /var/www/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:200
Stack trace:
** Dockerを使っている **
$client = new Client();
$client->request(...)では、localhost;8080ではなく、IPアドレスを指定する
＞Windowsネットワーク設定で確認できるIPアドレス（192.168.xxx.xxx:[port]）




