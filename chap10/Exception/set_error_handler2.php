<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/19
 * Time: 8:38
 */

function hoge(int $x) {}

try{
    hoge('xxxx');
} catch (Exception $exception) {
    print $exception->getMessage();
    // エラーは例外クラスのサブクラスではない。
} catch (Error $error) {
    print $error->getMessage();
}

//例外の場合
//fatal error: Uncaught TypeError: Argument 1 passed to hoge() must be of the type integer, string given, called in /Users/endu/src/fendo181/php_repos/chap10/Exception/set_error_handler2.php on line 12
// and defined in /Users/endu/src/fendo181/php_repos/chap10/Exception/set_error_handler2.php:9
//Stack trace:

//エラーの場合
//Argument 1 passed to hoge() must be of the type integer, string given, called in /Users/endu/src/fendo181/php_repos/chap10/Exception/set_error_handler2.php on line 12%
