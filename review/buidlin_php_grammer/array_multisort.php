<?php

// スコアだけでなく名前のほうでも並び替えたい場合 array_multisort() という関数を使います。
// ref: https://www.php.net/manual/ja/function.array-multisort.php


$data = [
  ['name' => 'taguchi', 'score' => 80],
  ['name' => 'kikuchi', 'score' => 60],
  ['name' => 'hayashi', 'score' => 70],
  ['name' => 'tamachi', 'score' => 60],
];

// score のキーの値だけを抜き取ってくれます。
$scores = array_column($data, 'score');
// name のキーの値だけを抜き取ってくれます。
$names = array_column($data, 'name');

print_r($scores);
print_r($names);

// array_multisort(
//   $scores,
//   $names,
//   $data
// );

// print_r($data);

array_multisort(
  // $scores は大きい順で数値順
  $scores, SORT_DESC, SORT_NUMERIC,
  // $names はアルファベットの逆順で文字列だよと書いてあげましょう。
  $names, SORT_DESC, SORT_STRING,
  $data
);

print_r($data);
