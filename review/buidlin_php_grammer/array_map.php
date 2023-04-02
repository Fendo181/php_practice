<?php

$prices = [100, 200, 300];
// array_map は $prices の全ての要素に適用して
// その結果で新しい配列を作ってくれる
$newPrices = array_map(
  // 無名関数
  function($n) { return $n * 1.1;},
  $prices
);

print_r($newPrices);

// 無名関数でreturnを返すだけならアロー関数で置き換える事もできる
$newPrices2 = array_map(
  // アロー関数
  fn($n) => $n * 1.1,
  $prices
);

print_r($newPrices2);
