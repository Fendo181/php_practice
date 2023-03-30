<?php

$a = [3, 4, 8];
$b = [4, 8, 12];

// $merged = array_merge($a,$b);
// 置き換え方法
$merged = [...$a, ...$b];
print_r($merged);

// array_unique: 重複した値を取り除く
// 元配列に変更を加えずに新しい配列を作ってくれるので
$uniques = array_unique($merged);
print_r($uniques);

// array_diff
$dif1 = array_diff($a,$b);
print_r($dif1); // 3

// array_diff
$dif2 = array_diff($b,$a);
print_r($dif2); // 12

// array_intersect(配列の共通項を計算する)
$common = array_intersect($a,$b);
print_r($common); // 4,8
