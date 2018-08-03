<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/05/18
 * Time: 7:53
 */

function getTraiangleArea(float $base = 5, float $height =1): float
{
    print PHP_EOL;
    return $base*$height/2;
}

$area = getTraiangleArea();
print "三角形の面積は{$area}です。";

$area = getTraiangleArea(10);
print "三角形の面積は{$area}です。";

$area = getTraiangleArea(10, 5);
print "三角形の面積は{$area}です。";
