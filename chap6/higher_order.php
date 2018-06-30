<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/07
 * Time: 23:33
 */

// 高階関数
// 関数内から

function my_array_walk(array $array, callable $func){
    foreach ($array as $key => $value) {
        $func($value, $key);
    }
}
function showItem($value, $key) {
    print "{$key}:{$value}";
}

$data = ['endo', 'natumi', 'takahashi'];
my_array_walk($data, 'showItem');