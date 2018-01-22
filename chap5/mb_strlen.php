<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/23
 * Time: 8:06
 */

mb_internal_encoding('UTF-8');
//mbに対応している、文字列の長さを取得する。
$str = "Endo Tech Blog";
print  mb_strlen($str);