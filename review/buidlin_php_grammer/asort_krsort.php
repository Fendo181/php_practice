<?php

$scores1 = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

// 配列をソートする
sort($scores1);
print_r($scores1);
// 配列を逆順にソートする
rsort($scores1);
print_r($scores1);
// sort、rsortはkeyが削除してソートす

$scores2 = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

// keyを残して値で配列をソートする
asort($scores2);
print_r($scores2);
// keyを残して配列を逆順にソートする
arsort($scores2);
print_r($scores2);


// キーでソートとしたい場合

$scores3 = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

krsort($scores2);
print_r($scores2);
krsort($scores2);
print_r($scores2);
