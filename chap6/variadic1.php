<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/05/18
 * Time: 8:10
 */

// ...で
function sum(float ...$args): float
{
    // 結果を格納する為の変数 $result
    $result = 0;
    // 取得した引数を額に加算処理
    foreach ($args as $arg) {
        $result += $arg;
    }
    return $result;
}

print sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
