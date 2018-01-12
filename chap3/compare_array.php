<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/11
 * Time: 7:23
 */

$data1 = [1,2,];
$data2 = [1,2,3];

//要素数の数で比較
var_dump($data1 < $data2);

//要素数が同じ場合

$data11 = [1,2,4];
$data21 = [1,2,3];

//要素数が等しい場合は同じキーをもつ要素通しで比較を行う。
var_dump($data11 < $data2);

$data12 = [1,2,3];
$data22 = [1,2,'3'];

var_dump($data12 == $data22); #false
var_dump($data12 === $data22); #true