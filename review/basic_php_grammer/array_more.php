<?php

$moreScores = [
  55,
  72,
  'perfect',
  [90,42,34],
];

$scores = [
  90,
  40,
  ...$moreScores,// 配列の中身がちゃんと展開される
  100,
];


print_r($scores);
print_r($scores[5][2]);
