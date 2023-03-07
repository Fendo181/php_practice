<?php

$n = 5.6283;

// 少数点を切り上げる
echo ceil($n). PHP_EOL; // 6
// 少数以下を切り捨てる
echo floor($n). PHP_EOL; // 5
// 四捨五入して整数にする
echo round($n). PHP_EOL; // 6
// 小数点以下二桁になるように四捨五入
echo round($n,2). PHP_EOL; // 5.63


// 1~6の中で乱数
echo mt_rand(1,6).PHP_EOL;

// 最大値を求める
echo max(3,9,4).PHP_EOL;
echo min(3,9,4).PHP_EOL;

// 便利な定数
// 円周率
echo M_PI.PHP_EOL; // 3.141592653589
// 2 の平方根
echo M_SQRT2.PHP_EOL; // 1.4142135623731
