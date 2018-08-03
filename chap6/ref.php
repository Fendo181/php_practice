<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/05/18
 * Time: 8:01
 */

function increment(int &$num): int
{
    $num++;
    return $num;
}

$value = 10;
print increment($value); #11
echo PHP_EOL;
print $value;  #11
