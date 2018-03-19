<?php
// 特定の要素を取得してくる。
$data = ['endo','takahashi','nomoto'];

print_r(array_slice($data,2,3));
// keyも維持できる。
print_r(array_slice($data,2,3,true));
// 0から末尾まで取得できる。
print_r(array_slice($data,0));
