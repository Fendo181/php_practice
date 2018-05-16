<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/05/17
 * Time: 7:25
 */

// global
$x =10;

function checkScope(): int {
    // 関数内のglobal
    global $x;

    //ローカル変数として破棄されるので、外側の$xには影響を与えない。
    unset($x);
    return ++$x;
}

print checkScope(); #1
echo PHP_EOL;
print $x; #10

