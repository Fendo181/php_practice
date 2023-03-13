<?php

$scores = [30, 40, 50];

print_r($scores);


// 先頭に要素を追加するには array_unshift()
array_unshift($scores, 10, 20);
print_r($scores);
// 逆に末尾に追加するには array_push()
array_push($scores, 60, 70);
print_r($scores);
$scores[] = 80;

// 先頭から要素を削除するには array_shift()
array_shift($scores);
print_r($scores); // 10が消える

// 末尾から要素を削除するには array_pop()
array_pop($scores);
print_r($scores); // 80が消える
