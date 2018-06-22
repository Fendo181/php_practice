<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/19
 * Time: 7:30
 */

//素数を求めるジェネレーター関数
function getPrimes()
{
    $num = 2;
    while (true)
    {
        if(isPrime($num)) { yield $num; }
        $num++;
    }
}

//素数判定

function isPrime(int $value) :bool
{
    $prime_flag = true;
    for ($i = 2; $i <= floor(sqrt($value)); $i++){
        if($value % $i === 0 ){
            //割り切れたら素数でない。
            $prime_flag = false;
            break;
        }
    }
    return $prime_flag;
}

//素数を順々に出力する。

foreach(getPrimes() as $prime)
{
    /* 素数が101以上になったら終了 */
    if($prime > 50) { die(); }
    print $prime;
    echo PHP_EOL;
}

