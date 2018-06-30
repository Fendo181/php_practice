<?php
/**
 * Created by PhpStorm.
 * User: futoshi.endo
 * Date: 2018/06/30
 * Time: 15:03
 */

require_once 'TriangleFigure.php';
$tri = new TriangleFigure();

$tri->base = -10;
$tri->height = 'HogeHioge';

//  負数や文字列を入れても通ってしまう。
print "三角形の面積は{$tri->getArea()}";