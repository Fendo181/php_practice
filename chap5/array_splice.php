<?php
$data = ['apple', 'orange','banana','pinapple','guaba'];
# 3番目から4番目の要素数を抜き出して、以下の配列を入れる。
print_r(array_splice($data,3,4,['endo','takahashi']));
print_r($data);


$data2 = ['apple', 'orange','banana','pinapple','guaba'];
// 負数を指定すると、末尾が-1になるのでそこから数えて置き換える事ができる。
print_r(array_splice($data2,0,-5,['endo','takahashi']));
print_r($data2);

$data3 = ['apple', 'orange','banana','pinapple','guaba'];
// 0から3までの要素が取得でき、それ以外は削られる。
print_r(array_splice($data3,0,3,['endo','takahashi']));
print_r($data);
