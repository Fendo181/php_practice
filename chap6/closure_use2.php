<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/14
 * Time: 8:37
 */

function hoge() {
    $data = [100, 200, 300, 400];
    # ローカルスコープ
    $result = 0;

    my_array_walk($data ,function (float $value, int $key) {
        // globalは関数の外側の変数を取得しにいくので結局は値は0になる
        global $result;
        $result += $value;
    });

    print "{result}";
}

hoge();