<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/04/27
 * Time: 7:27
 */

function checkScope()
{
    // loca;
    $x = 0;
    return ++$x;
}

// local変数は関数が終了すると破棄されて再度初期化されので、同じ結果になる。
print checkScope(); #1
print checkScope(); #1
