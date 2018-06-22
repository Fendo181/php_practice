<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/04/27
 * Time: 7:14
 */

/*
 * グローバル変数とローカル変数は、スコープの異なる変数は、名前が同一でも別の変数として扱われます。
 */
// global
$x = 10;

function checkScope(): int{
//    local
    global  $x;
    return ++$x;
}

print checkScope(); #11
print $x; #11
