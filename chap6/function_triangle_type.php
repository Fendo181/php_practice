<?php
declare(strict_types=1);
// ユーザ定義関数の第一歩は重複をなくすこと
// $base = 8;
// $hight = 10;
// $area = $base * $hight;
// print "三角形の面積は{$area}です";

function getTriangleArea(float $base,float $hight): float {
    return $base * $hight/2;
}

$area = getTriangleArea(8,'1');
print "三角形の面積は{$area}です";

// 型は存在するが
// $area = getTriangleArea(8,'1');は通ってしまう。
