<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/11
 * Time: 8:21
 */

require_once 'Person.php';

$p1 = new Person('リオ', '山田');
// オブジェクト変数を参照渡しした場合
$p2 = $p1;
var_dump($p1 == $p2);
var_dump($p1 === $p2);

// オブジェクト変数を値渡し（コピー）
$p3 = clone $p1;
var_dump($p1 == $p3); //true
var_dump($p1 === $p3); //false //p1とp3が指しているアドレスが違う為
