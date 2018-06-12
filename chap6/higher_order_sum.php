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

$result = 0;
function sum(float $value, int $key) {
    global $result;
    $result += $value;
}

$data = [100, 24, 200];
my_array_walk($data, 'sum');
print $result;