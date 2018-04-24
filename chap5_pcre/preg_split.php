<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/04/11
 * Time: 8:14
 */


/**
 * preg_split
 * reg_split — 正規表現で文字列を分割する
 *
 * @pattern string 正規表現パターン
 * @subject string 置き換え対象の文字列
 *
 */

$str = "2016-05-14";
$result = (preg_split('|[/. \-]|',$str));

print "{$result[0]}年{$result[1]}月{$result[2]}日";
