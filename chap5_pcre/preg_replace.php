<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/04/11
 * Time: 7:53
 */

//正規表現で文字列を置換する。

$string = 'April 15, 2017';
// パターンを考える
$pattern = '/(\w+) (\d+), (\d+)/i';

$replacement = '${1}1,$3, $2';
echo preg_replace($pattern, $replacement, $string);
