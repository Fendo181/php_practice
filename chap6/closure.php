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

$data = ['endo', 'takahashi', 'natumi'];

my_array_walker(
    $data,
    function ($value, $key) {
        print "{$key}:{$value}";
        echo PHP_EOL;
    }
);
