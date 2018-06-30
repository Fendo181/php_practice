<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/07
 * Time: 23:26
 */

function getTriangleArea(float $base, float $height)
{
    return ($base*$height)/2;
}

$name = 'getTriangleArea';
$area = $name(8, 10);

echo "三角形の面積は{$area}です";