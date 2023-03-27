<?php

// sort: 配列を直接書き換えて、値を小さい順に並び替えてくれる。
$scores = [40, 50, 20, 30];
sort($scores);
print_r($scores);

// rsort: 値を大きい順に並び替えてくれます
$scores1 = [20, 40, 30, 10];
rsort($scores1);
print_r($scores1);


// shuffle: 値をシャッフルしてくれる
$scores2 = [20, 40, 30, 10];
shuffle($scores2);
print_r($scores2);

// array_rand($a, 2): $aの配列からランダムに要素を2 個ピックアップします。
// 元配列には変更を加えずに、新しく配列を返してくれる点
$scores3 = [10, 20, 30, 60];
$picked = array_rand($scores3,2);
print_r($picked);

echo $picked[0];
echo $picked[1];
