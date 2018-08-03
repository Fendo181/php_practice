<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/14
 * Time: 8:37
 */

function hoge()
{
    $data = [100, 200, 300, 400];
    # ローカルスコープ
    $result = 0;

    function my_array_walker(array $array, callable $func)
    {
        foreach ($array as $key => $value) {
            $func($value, $key);
        }
    }

    my_array_walker($data, function (float $value, int $key) use (&$result) {
        // globalは関数の外側の変数を取得しにいくので結局は値は0になる
        $result += $value;
    });

    print "{$result}";
}

hoge();
