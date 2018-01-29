<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/29
 * Time: 23:14
 */

$str = "おはよう！";

print  mb_convert_kana($str,'h'); //ｵﾊﾖｳ！
print  mb_convert_kana($str,'C'); //オハヨウ！
