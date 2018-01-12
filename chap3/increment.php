<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/08
 * Time: 23:33
 */

$x = 10;
$y = ++$x;

print $x;
//前置加算(元の方も影響をうける。)
print $y;

$i = 10;
//後置加算(元の方も影響をうける。)
$j = $i++;
print $i;
print $j;
