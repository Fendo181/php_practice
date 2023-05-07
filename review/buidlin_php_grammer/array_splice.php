<?php
// array_splice() 途中の要素を削除して詰める
// array_sliceと違って、array_spliceは元配置を直接変更します。
$scores1 = [30, 40, 50, 60, 70, 80];
array_splice($scores1,2,3);
print_r($scores1);

// array_splice(配列、位置、個数、要素)で指定すると、削除した位置に要素を入れる事ができる
$scores2 = [30, 40, 50, 60, 70, 80];
array_splice($scores2,2,3,100);
print_r($scores2);


// array_splice(配列、位置、0、要素)で指定すると、指定した位置に要素を入れる事ができる
$scores3 = [30, 40, 50];
array_splice($scores3,2,0,100);
print_r($scores3); // 20,40,100,50
