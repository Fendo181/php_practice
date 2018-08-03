<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/15
 * Time: 8:31
 */

$rank = '甲';


switch ($rank) {
    case '甲':
        print '大変良いです！';
        break;
    case '乙':
        print '良いです！';
        break;
    case '柄':
        print 'もう少しがんばって！';
        break;
    default:
        print '???';
        break;
}
