<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/14
 * Time: 8:37
 */

function my_array_walker(array $array, callable $func)
{
    foreach ($array as $key => $value) {
        $func($value, $key);
    }
}

$data = [100, 200, 300, 400];
# 親スコープの変数
$result = 0;

my_array_walker(
    $data,
    # &で参照渡しを行っている。
    function (float $value, int $key) use (&$result) {
        $result += $value;
    }
);

print "{$result}";
