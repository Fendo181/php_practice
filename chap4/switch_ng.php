<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/15
 * Time: 8:42
 */

$exp = 'XJAPAN';

switch ($exp){
    case 0:
        print '値はゼロ。';
        break;
    case 'XJAPAN':
        print '値はXJAPAN';
        break;
}

//switch文は内部的に「==」で比較を行うので、
//'文字列' == 数値 だと、文字列は自動で0に変換されてしまうので注意