<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/09/03
 * Time: 9:17
 */

$dsn = 'mysql:dbname=selfphp;host=127.0.0.1;charset=utf8';
$user = 'selfuser';
$password = 'selfpass';

try {
// 接続をする
    $db = new PDO($dsn,$user,$password);
    print ('接続に成功しました');
}catch (PDOException $e) {
    print "接続エラーです: {$e->getMessage()}";
}finally{
    $db = null;
}
