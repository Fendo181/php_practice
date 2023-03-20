<?php

$scores = [30, 40, 50, 60, 70];

// array_slice(配列、位置、個数)
// array_push() などは元配列を直接変更していた。
// array_slice() に関しては元配列は変更せずに新しい配列を作って返してくれる。

$partial = array_slice($scores , 2, 3);
// 最後まで指定する時は最後の引数は必要ない
print_r($scores);
print_r($partial);
