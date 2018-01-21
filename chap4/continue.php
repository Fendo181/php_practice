<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/20
 * Time: 22:45
 */

$sum = 0;
for ($i = 1; $i <= 100; $i++){
    // 2で割り切れる偶数値のみ計算する。
    // 処理をスキップする。
    if($i % 2 !== 0 ){ continue; }
    print $sum;
    echo PHP_EOL;
    $sum += $i;
}

print "合計値は{$sum}です!";