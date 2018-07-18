<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/19
 * Time: 8:27
 */

// エラーハンドルを登録する。
set_error_handler(
    function ($errno, $errstr, $file, $line, $context) {
        throw new ErrorException($errstr, 0, $errno, $file, $line);
    }
);


try{
    mb_convert_encoding();
} catch (ErrorException  $exception) {
    print $exception->getMessage(); //mb_convert_encoding() expects at least 2 parameters, 0 given%
}