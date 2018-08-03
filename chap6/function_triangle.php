<?php
// ユーザ定義関数の第一歩は重複をなくすこと
// $base = 8;
// $hight = 10;
// $area = $base * $hight;
// print "三角形の面積は{$area}です";


// 型がないと通ってしまう。
// $area = getTriangleArea(8,'1');は通ってしまう。

function getTriangleArea($base, $hight)
{
    return $base * $hight/2;
}

$area = getTriangleArea(8, '10');
print "三角形の面積は{$area}です";
