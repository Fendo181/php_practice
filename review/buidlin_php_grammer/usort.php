<?php

$data = [
  ['name' => 'taguchi', 'score' => 80],
  ['name' => 'kikuchi', 'score' => 60],
  ['name' => 'hayashi', 'score' => 70],
  ['name' => 'tamachi', 'score' => 60],
];

// socreが小さい順にソートをする
usort(
  $data,
  function($a,$b) {
    // 2つの値が同じで、順番を変えたくないときは 0 を返しなさいという仕様
    if ($a['score'] === $b['score']) {
      return 0;
    }

    return $a['score'] > $b['score'] ? 1 : -1;
  }
);

// usort() は元配列を直接書き換えるので、これで OK
// score が同じだったら名前のほうもアルファベット順やその逆順に並べたかった場合、
// usort() では実はひとつの項目しか比較できないので、それが難しい
print_r($data);
