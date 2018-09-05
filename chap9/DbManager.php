<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/09/04
 * Time: 23:26
 */

function getDb()
{
    $dsn = 'mysql:dbname=selfphp;host=127.0.0.1;charset=utf8';
    $user = 'selfuser';
    $password = 'selfpass';

    // DBの接続を確立させる
    $db = new PDO($dsn, $user, $password);
    return $db;
}
