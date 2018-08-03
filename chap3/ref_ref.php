<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/10
 * Time: 8:46
 */
$x = 1;
$y = &$x;
$x = 5;

print $y;

$y = 10;
print $x;
