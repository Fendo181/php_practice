<?php

$data = ['endo', 'takahashi', 'mitani','15'];
var_dump(array_search('endo', $data)); #0
var_dump(array_search('mitani', $data)); #2
var_dump(array_search('yokota', $data)); #false

var_dump(array_search(15, $data)); #数値と文字列比較は `==`なのでint(3)
var_dump(array_search(15, $data, true)); #false 第三引数にtrueを渡すと現道にチェックをする。
