<?php

// array_fill
// 0のインデックスから 5 個分を 10 の値で埋めてねと書いてあげます。
$scores = array_fill(0,5,10);
print_r($scores);

// range
// 1 から 10 までの値を使って配列を順々に使う
$scores2 = range(1,10);
print_r($scores2);
// 1 から 10 までで、2刻みで値を使って配列を順々に使う
$scores3 = range(1,10,2);
print_r($scores3);

// 配列の中身を集計する
echo array_sum($scores).PHP_EOL;
echo max($scores).PHP_EOL;
echo min($scores).PHP_EOL;

// 平均を求める(平均を求める関数はない)
echo array_sum($scores) / count($scores).PHP_EOL;
